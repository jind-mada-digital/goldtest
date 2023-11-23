<?php 
class Cms653f5b9b67025337419954_79752b9181fecfe7e61e2b04bc155ec2Class extends Cms\Classes\PartialCode
{
public function onStart() {
    $this['schools'] = Goldtest\Site\Models\School::all();
    $this['schools_titles'] = Goldtest\Site\Models\Settings::get('school_post_titles');
}
}
