<?php 
class Cms653f7376b7d02455156358_b5f82b98d9cf0c06962b3492477ba817Class extends Cms\Classes\PartialCode
{
public function onStart() {
    $this['isCustomTitle'] = 1;
    $component = $this->controller->findComponentByName('customerProfile');

    $this['schools'] = Goldtest\Site\Models\School::all();
    $titles = $this['schools_titles'] = Goldtest\Site\Models\Settings::get('school_post_titles');

    foreach($titles as $title) {
        if($title['name'] === $component->user->goldtest_school_title) {
            $this['isCustomTitle'] = 0;
            break;
        }
    }

    if($component->user->goldtest_school_title == '') {
        $this['isCustomTitle'] = 0;
    }
}
}
