<?php

namespace uzgent\LockButtonClass;

// Declare your module class, which must extend AbstractExternalModule
class LockButtonClass extends \ExternalModules\AbstractExternalModule {

    public function redcap_data_entry_form($project_id, $record, $instrument, $event_id, $group_id, $repeat_instance)
    {
                echo '<script>
$("#__LOCKRECORD__-tr").after("<button onclick=\"lockUnlockForms(\''.$record.'\',\''.$record.'\',\'\',\'1\',\'1\',\'lock\');\" id=\"ui-id-3\" tabindex=\"-1\" role=\"menuitem\" class=\"ui-menu-item-wrapper\"><img src=\"'.APP_PATH_WEBROOT.'/Resources/images/lock.png\"> <span style=\"vertical-align:middle;color:#A86700;\">Lock all instruments across all events for record '.$record.' </span></button>");
 </script>';
    }


}
