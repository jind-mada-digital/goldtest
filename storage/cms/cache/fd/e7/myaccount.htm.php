<?php 
use Goldtest\Mall\Classes\Customer\GoldtestSignUpHandler;
class Cms653f6132a95f1837769646_f4a22b2c792f3b8394f6135ac32b2e0fClass extends Cms\Classes\PageCode
{
public function onStart() {
  $this['showPopup'] = \Session::get('show_user_fill_details_popup', '');
  $this['showPopupBool'] = $this['showPopup'] == 'show' ? 1 : 0;
}
public function onEnd() {
  \Session::put('show_user_fill_details_popup', '');
}
public function onUserDataSubmit() {

  $data = post();
  $handler = app(GoldtestSignUpHandler::class);
  $neededRules = array_only($handler::rules(false), [
      'height',
      'weight',
  ]);
  
  $validation = Validator::make($data, $neededRules, $handler::messages());
  if ($validation->fails()) {
      throw new ValidationException($validation);
  }

  // else save
  $user = Auth::getUser();
  $user->customer->height = $data['height'];
  $user->customer->weight  = $data['weight'];
  $user->customer->save();

  // Re-authenticate the user with his new credentials
  Auth::login($user);

  \Flash::success(trans('offline.mall::lang.common.saved_changes'));

  return \Redirect::to(url('/account'));
}
}
