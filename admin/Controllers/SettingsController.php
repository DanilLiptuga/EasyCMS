<?php


namespace admin\Controllers;


use admin\Language\AdminLanguage;
use Engine\AbstractController;

class SettingsController extends AbstractController
{
    public function index()
    {
        $settings = $this->load->model('settings');
        if (isset($_POST['save_but'])){
            foreach ($settings->getSettings() as $setting){
                if ($setting->value != $_POST[$setting->id]) {
                    $settings->updateSetting($setting->id, $setting->name, $_POST[$setting->id]);
                }
            }
            $this->view->theme->language = new AdminLanguage($this->di);
            $this->view->language = $this->view->theme->language;
        }
        $data['settings'] = $settings->getSettings();
        $this->view->render('settings', $data);
    }
}