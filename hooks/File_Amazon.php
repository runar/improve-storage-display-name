//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if (!\defined('\IPS\SUITE_UNIQUE_KEY')) {
    exit;
}

class hook77 extends _HOOK_CLASS_
{
    /**
     * Display name
     *
     * @param array $settings the array with bucket settings
     *
     * @return string
     */
    public static function displayName($settings)
    {
        if (!empty($settings['bucket_path'])) {
            $settings['bucket'] .= "/${settings['bucket_path']}";
        }

        return parent::displayName($settings);
    }
}
