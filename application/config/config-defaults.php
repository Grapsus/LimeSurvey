<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* LimeSurvey
* Copyright (C) 2007-2011 The LimeSurvey Project Team / Carsten Schmitz
* All rights reserved.
* License: GNU/GPL License v2 or later, see LICENSE.php
* LimeSurvey is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

/**
* This file contains the default settings for LimeSurvey
* Do not edit this file as it may change in future revisions of the software.
* Correct procedure to setup LimeSurvey is the following:
* - copy the corresponding parameter you want to change from this file to the config.php file (config section)
* - adjust the setting in config.php
*
* @package configuration
*/


$config = array();

/**
* sitename (string)
* The official name of the site (appears in the Window title)
* This setting is overridden by the global settings in the administration.
*/
$config['sitename'] = 'LimeSurvey';

/**
* defaultuser (string)
* The default administration username when LimeSurvey is installed
*/
$config['defaultuser'] = 'admin';

/**
* defaultpass (string)
* The password for the default administration username when LimeSurvey is installed
*/
$config['defaultpass'] = 'password';

/**
* admintheme (string)
* This setting specifys the directory where the admin finds it theme/css style files, e.g. setting 'default' points to /admin/styles/default
* This setting is overridden by the global settings in the administration.
*/
$config['admintheme'] =  'gringegreen';

/**
* adminthemeiconsize (integer)
* This settings describes the icon size for a normal toolbar icon - default for gringegreen is 32
*/
$config['adminthemeiconsize'] =  32;

/**
* login_max_attempts (integer)
* If the user enters password incorrectly lock them out after this many attempts
*/
$config['login_max_attempts'] = 3;

/**
* login_lockout_time (integer)
* If the user enters password incorrectly more often then the configured maximum attempt lock them out for a certain time (seconds)
*/
$config['login_lockout_time'] = 600;

/**
* defaultlang (string)
* The default language to use - the available languages are the directory names in the /locale dir - for example de = German
* This setting is overridden by the global settings in the administration.
*/
$config['defaultlang'] = 'en';

/**
* timeadjust (integer)
* The number of hours to adjust between your webserver local time and your own local time (for datestamping responses)
* This setting is overridden by the global settings in the administration.
*/
$config['timeadjust'] = 0;

/**
* @todo The following settings need to be moved to question attributes / advanced question settings / survey settings:
*
* repeatheadings
* minrepeatheadings
* shownoanswer
*/
$config['repeatheadings']     =   25;             // The number of answers to show before repeating the headings in array questions. Set to 0 to turn this feature off
$config['minrepeatheadings']  =   3;                // The minimum number of remaining answers that are required before repeating the headings in array questions.
$config['shownoanswer']       =   1;                // Show 'no answer' for non mandatory questions ( 0 = no , 1 = yes , 2 = survey admin can choose )

/**
* allowexportalldb  (boolean)
* Setting this to false will only export prefixed tables when doing a database dump. If set to true ALL tables in the database will be exported
*/
$config['allowexportalldb'] = false;

/**
* maxdumpdbrecords (integer)
* The maximum number of records that would be output in a go (and held in memory)during a database backup. Reduce this number if you're getting errors while backing up the entire database.
*/
$config['maxdumpdbrecords'] = 2000;

/**
* allowmandbackwards (boolean)
* Allow moving backwards (ie: << prev) through survey if a mandatory question has not been answered. Valid values are: true/false
*/
$config['allowmandbackwards'] = true;

/**
* deletenonvalues (boolean)
* By default, LimeSurvey does not save responses to conditional questions that haven't been or shouldn't have been answered/shown due to conditions.
* To have LimeSurvey save these responses change this value to false.
* @todo Value not in use anymore ? has to be checked.
*/
$config['deletenonvalues'] = true;

/**
* stringcomparizonoperators (boolean)
* By default, LimeSurvey assumes the numerical order for comparison operators in conditions. If you need string comparison operators, set this parameter to true
*/
$config['stringcomparizonoperators'] = false;

/**
* blacklistallsurveys (boolean)
* Blacklist all current surveys for participant once the global field is set
*/
$config['blacklistallsurveys'] = false;

/**
* blacklistnewsurveys (boolean)
* Blacklist participant for any new added survey once the global field is set
*/
$config['blacklistnewsurveys'] = false;

/**
* blockaddingtosurveys (boolean)
* Don't allow blacklisted participants to be added to new survey
*/
$config['blockaddingtosurveys'] = false;

/**
* hideblacklisted (boolean)
* Don't show blacklisted participants
*/
$config['hideblacklisted'] = false;

/**
* deleteblacklisted (boolean)
* Delete globally blacklisted participant from the database
*/
$config['deleteblacklisted'] = false;

/**
* allowunblacklist (boolean)
* Allow participant to unblacklist himself/herself
*/
$config['allowunblacklist'] =  false;

/**
* userideditable (boolean)
* Allow editing of user IDs
*/
$config['userideditable'] = false;

/**
* defaulttemplate (string)
* This setting specifys the default theme used for the 'public list' of surveys
*/
$config['defaulttemplate'] = 'default';

/**
* allowedtemplateuploads (string)
* File types allowed to be uploaded in the templates section.
*/
$config['allowedtemplateuploads'] = 'gif,ico,jpg,png';

/**
* allowedresourcesuploads (string)
* File types allowed to be uploaded in the resources sections, and with the HTML Editor
*/
$config['allowedresourcesuploads'] = '7z,aiff,asf,avi,bmp,csv,doc,fla,flv,gif,gz,gzip,ico,jpeg,jpg,mid,mov,mp3,mp4,mpc,mpeg,mpg,ods,odt,pdf,png,ppt,pxd,qt,ram,rar,rm,rmi,rmvb,rtf,sdc,sitd,swf,sxc,sxw,tar,tgz,tif,tiff,txt,vsd,wav,wma,wmv,xls,xml,zip,pstpl,css,js';

/**
* memorylimit (string)
* This sets how much memory LimeSurvey can access in megabytes. 32 mb is the minimum recommended - if you are using PDF functions up to 64 mb may be needed
* @todo Has currently no effect
*/
$config['memorylimit'] = '32';

/**
* showpopups (boolean)
* Show popup messages if mandatory or conditional questions have not been answered correctly. true=Show popup message, false=Show message on page instead.
*/
$config['showpopups'] = true;

/**
* maxemails (integer)
* The maximum number of emails to send in one go (this is to prevent your mail server or script from timeouting when sending mass mail)
*/
$config['maxemails'] = 50;


/**
* filterout_incomplete_answers (string)
* Experimental parameter, only change if you know what you're doing
* Default behaviour of LimeSurvey regarding answer records with no submitdate
* Can be overwritten by module parameters choose one of the following:
*      * filter:       Show only complete answers
*      * show:         Show both complete and incomplete answers
*      * incomplete:   Show only incomplete answers
*/
$config['filterout_incomplete_answers'] = 'show';

/**
* strip_query_from_referer_url (boolean)
* The default behaviour is to record the full referer url when configured.
* Set to true in order to remove the parameter part of the referer url
*/
$config['strip_query_from_referer_url'] = false;

/**
* defaulthtmleditormode (string)
*  * sets the default mode for htmleditor: none, inline, popup
*    users without specific preference inherit this setup
*  * inline: inline replacement of fields by an HTML editor:
*     --> slow but convenient and user friendly
*  * popup: adds an icon that runs a popup with and html editor
*     --> faster, but html code is displayed on the form
*  * none: no html editor
*/
$config['defaulthtmleditormode'] = 'inline';

/**
* survey_preview_admin_only (boolean)
* Enforce Authentication to the LS system before beeing able to preview a survey (testing a non active survey)
* This setting is overridden by the global settings in the administration.
*/
$config['survey_preview_admin_only'] = true;


/**
* use_one_time_passwords (boolean)
* Activate One time passwords
* The user can call the limesurvey login at /limesurvey/admin and pass username and
* a one time password which was previously written into the users table (column one_time_pw) by an external application.
* This setting has to be turned on to enable the usage of one time passwords.
*/
$config['use_one_time_passwords'] = false;


/**
*  display_user_password_in_html (boolean)
* Option to tell LS to display the automatically generated user password in the html GUI or not
*/
$config['display_user_password_in_html'] = false;


/**
* display_user_password_in_email (boolean)
* Option to tell LS to display the automatically generated user password in the welcome email or not
*/
$config['display_user_password_in_email'] = true;

/**
* auth_webserver (boolean)
* Enable delegation of authentication to the webserver.
* If you set this parameter to true and set your webserver to authenticate
* users accessing the /admin subdirectory, then the username returned by
* the webserver will be trusted by LimeSurvey and used for authentication
* unless a username mapping is used see auth_webserver_user_map below
*
* The user still needs to be defined in the limesurvey database in order to
* login and get his permissions (unless auth_webserver_autocreate_user is set to true)
*/
$config['auth_webserver'] = false;

/**
* auth_webserver_user_map (array)
* Enable username mapping*
* This parameter is an array mapping username from the webserver to username
* defined in LimeSurvey
* Can be usefull if you have no way to add an 'admin' user to the database
* used by the webserver, then you could map your true loginame to admin with
* $config['auth_webserver_user_map'] = array ('mylogin' => 'admin');
*/
$config['auth_webserver_user_map'] = array();

/**
* auth_webserver_autocreate_user (boolean)
* Enable this if you want to automatically create users authenticated by the
* webserver in LS
* Default is false (commenting this options also means false)
*/
$config['auth_webserver_autocreate_user'] = false;

/**
*  auth_webserver_autocreate_profile (array)
* This is an array describing the default profile to use for auto-created users
* This profile will be the same for all users (unless you define the optionnal
* 'hook_get_auth_webserver_profile' function).
*/
$config['auth_webserver_autocreate_profile'] = Array(
    'full_name' => 'autouser',
    'email' => 'autouser@test.test',
    'lang' => 'en',
    'htmleditormode' => $config['defaulthtmleditormode'],
    'templatelist' => 'default,basic',
    'create_survey' => 1,
    'create_user' => 0,
    'delete_user' => 0,
    'superadmin' => 0,
    'configurator' => 0,
    'manage_template' => 0,
    'manage_label' => 0
);

/**
* hook_get_auth_webserver_profile (function)
* The optionnal 'hook_get_auth_webserver_profile' function is for advanced user usage only.
* It is used to customize the profile of the imported user
* If set, this function will overwrite the auth_webserver_autocreate_profile defined above by its return value
*
*  You can use any external DB in order to fill the profile for the user_name passed as the first parameter
*  A dummy example for the 'hook_get_autouserprofile' function is given below:
*/
/*
function hook_get_auth_webserver_profile($user_name)
{
  return Array(
          'full_name' => '$user_name',
          'email' => "$user_name@localdomain.org",
          'lang' => 'en',
          'htmleditormode' => 'inline',
          'templatelist' => 'default,basic,MyOrgTemplate',
          'create_survey' => 1,
          'create_user' => 0,
          'delete_user' => 0,
          'superadmin' => 0,
          'configurator' =>0,
          'manage_template' => 0,
          'manage_label' => 0);
}
*/

/**
* filterxsshtml (boolean)
* Enables filtering of suspicious html tags in survey, group, questions and answer texts in the administration interface
* Only set this to false if you absolutely trust the users you created for the administration of  LimeSurvey and if you want to
* allow these users to be able to use Javascript etc. .
*/
$config['filterxsshtml'] = true;

/**
* usercontrolSameGroupPolicy (boolean)
* If this option is set to true, then limesurvey operators will only 'see'
* users that belong to at least one of their groups
* Otherwise they can see all operators defines in LimeSurvey
*/
$config['usercontrolSameGroupPolicy'] = true;

/**
* demo_mode (boolean)
* If this option is set to true, then LimeSurvey will go into demo mode.
* Demo mode disables the following things:
*
*  * Disables changing of the admin user's details and password
*  * Disables uploading files on the Template Editor
*  * Disables sending email invitations and reminders
*  * Disables doing a database dump
*  * Disables the ability to save the following global settings: Site name, Default language, Default Htmleditor Mode, XSS filter
*/
$config['demo_mode'] = false;

/**
* column_style (string)
* Because columns are tricky things, in terms of balancing visual
* layout against semantic markup. The choice has been left to the
* system administrator or designer. (Who ever cares most.)
*
* $column_style defines how columns are rendered for survey answers.
* There are four possible options:
*     'css'   using one of the various CSS only methods for creating
columns (see template style sheet for details).
*     'ul'    using multiple floated unordered lists. (DEFAULT)
*     'table' using conventional tables based layout.
*     NULL    blocks the use of columns
*/
$config['column_style'] = 'ul';

/**
* hide_groupdescr_allinone (boolean)
* This parameter 'hide_groupdescr_allinone' can be set to control
* if the group description should be hidden if the group description of a group of questions
* with all questions hidden by conditions is displayed in all-in-one survey mode.
* hide_groupdescr_allinone can be set to true or false (default: true)
*/
$config['hide_groupdescr_allinone'] = true;

/**
* use_firebug_lite (boolean)
* Use FireBug Lite for JavaScript and template development and testing.
* This allows you to use all the features of Firebug in any browser.
* see http://getfirebug.com/lite.html for more info.
*/
$config['use_firebug_lite'] = false;

/*
* showaggregateddata (boolean)
* When activated there are additional values like arithmetic mean and standard deviation at statistics.
* This only affects question types "A" (5 point array) and "5" (5 point choice).
* Furthermore data is aggregated to get a faster overview.
*/
$config['showaggregateddata'] = true;

/**
* standard_templates_readonly (boolean)
* When this settings is true/1 (default) then the standard templates that are delivered with the
* LimeSurvey installation package are read-only. If you want to modify a template just copy it first.
* This prevents upgrade problems later because if you modify your standard templates you could accidenitally
* overwrite these on a LimSurvey upgrade. Only set this to 0 if you know what you are doing.
*/
$config['standard_templates_readonly'] =  true;

/**
* showsgqacode (boolean)
* When this settings is true/1 (default = false/0) then the printable survey option will show a reference
* to the "lime_survey_12345" table which stores the survey answers.
* It will show a code like "12345X22X333name":
* 12345 = surveyID
* 22 = groupID
* 333 = questionID
* name = answer code (only shown for certain question types
*
* This code will be shown in front of each question and in front of each answer option at the printable survey.
* It can be used as a data analysis code book for querying data from the main response table.
*/
$config['showsgqacode'] =  false;

/**
* pdfdefaultfont (string)
* PDF export responses settings - default font for the PDF export
*/
$config['pdfdefaultfont'] = 'freemono';

/**
* pdffontsize (integer)
* PDF export responses settings - font size for normal text; survey title is +4; group title is +2
*/
$config['pdffontsize'] = 9;

/**
* notsupportlanguages (array)
* PDF export responses settings - languages not being supported by PDF export
*/
$config['notsupportlanguages'] = array('zh-Hant-TW','zh-Hant-HK','zh-Hans','ja','th');

/**
* pdforientation (string)
* PDF export responses settings - Set L for Landscape or P for portrait format
*/
$config['pdforientation'] = 'P';


/**
* Statistics chart settings
* Different languages need different fonts to properly create charts - this is what the following settings are for
*/

/**
* chartfontfile (string)
* Set the font file name used to created the charts in statistics - this font must reside in <limesurvey root folder>/fonts
* Set this to specific font-file (for example 'DejaVuSans.ttf') or set it to 'auto' and LimeSurvey tried to pick the best font depending on your survey base language
*/
$config['chartfontfile'] = 'auto';

/**
*  alternatechartfontfile (array)
*  Array of the font file name used to created the charts in statistics in specific langage - this font must reside in <limesurvey root folder>/fonts
*  Only used if $chartfontfile is set to auto. If font file doesn't exist in <limesurvey root folder>/fonts, an alert is sent to admin
*/
$config['alternatechartfontfile'] = array(
    'hi'=>'FreeSans.ttf',
    'ja'=>'migmix-1p-regular.ttf',
    'ko'=>'UnBatang.ttf',
    'si'=>'FreeSans.ttf',
    'th'=>'TlwgTypist.ttf',
    'zh-Hant-HK'=>'fireflysung.ttf',
    'zh-Hant-HK'=>'fireflysung.ttf',
    'zh-Hant-HK'=>'fireflysung.ttf',
);

/**
* chartfontsize (integer)
* Set the size of the font to created the charts in statistics
*/
$config['chartfontsize'] = 10;

/**
* updatecheckperiod (integer)
* Sets how often LimeSurvey checks for updates - the number sets the number of days between updates.
* Set to 0 to disable any update checks
* Recommended: 7
*/
$config['updatecheckperiod'] = 7;

/**
* updatekey (string)
* Sets the default update key for the ComfortUpdater
*/
$config['updatekey'] = '';

/**
* showxquestions (string)
* Allows you to control whether or not {THEREAREXQUESTIONS} is displayed (if it is included in a template)
*   hide = always hide {THEREAREXQUESTIONS}
*   show = always show {THEREAREXQUESTIONS}
*   choose = allow survey admins to choose
*/
$config['showxquestions'] = 'choose';

/**
* showgroupinfo (string)
* Allows you to control whether or not {GROUPNAME} and/or {GROUPDESCRIPTION} are displayed (if they are
* included in a template)
*   none = always hide both title and description
*   name = always {GROUPNAME} only
*   description = always show {GROUPDESCRIPTION} only
*   both = always show both {GROUPNAME} and {GROUPDESCRIPTION}
*   choose = allow survey admins to choose
*/
$config['showgroupinfo'] = 'choose';

/**
* showqnumcode (string)
* Allows you to control whether or not {QUESTION_NUMBER} and/or {QUESTION_CODE} are displayed (if they
* are included in a template)
*   none = always hide both {QUESTION_NUMBER} and {QUESTION_CODE}
*   code = always show {QUESTION_CODE} only
*   number = always show {QUESTION_NUMBER} only
*   both = always show both {QUESTION_NUMBER} and {QUESTION_CODE}
*   choose = allow survey admins to choose
*/
$config['showqnumcode'] = 'choose';

/**
* force_ssl string (string)
* Forces LimeSurvey to run through HTTPS or to block HTTPS
*   'on' =  force SSL/HTTPS to be on (This will cause LimeSurvey
*       to fail in SSL is turned off)
*   'off' = block SSL/HTTPS (this prevents LimeSurvey from
*       running through SSL)
*   '' =    do nothing (default)
*
* DO NOT turn on secure unless you are sure SSL/HTTPS is working and
* that you have a current, working, valid certificate. If you are
* unsure whether your server has a valid certificate, just add 's'
* to the http part of your normal LimeSurvey URL.
*   e.g. https://your.domain.org/limesurvey/admin/admin.php
* If LimeSurvey comes up as normal, then everything is fine. If you
* get a page not found error or permission denied error then
*/
$config['force_ssl'] = ''; // DO not turn on unless you are sure your server supports SSL/HTTPS

/**
* ssl_emergency_override (boolean)
* Forces SSL off if you've turned  HTTPS/SSL on in the global settings but your server doesn't have HTTPS
* enabled, the only way to turn it off is by changing a value in the database
* directly. This allows you to force HTTPS off while you change the global
* settings for Force Secure.
*
*     false = do nothing;
*     true = override $force_ssl=on;
*
* This should always be false except in emergencies where you change it to true
* until you fix the problem.
*/
$config['ssl_emergency_override'] = false;

/**
* ipinfodb_api_key (string)
* Get your IP Info DB key from http://ipinfodb.com/
* If you have the API key, you can use it to get the approximate location of the user initially.
*/
$config['ipinfodb_api_key'] = '';

/**
* googlemaps_api_key (string)
* Google Maps API key. http://code.google.com/apis/maps/signup.html
* to have questions that require google Maps!
*/
$config['googlemaps_api_key'] = '';

/**
* googletranslateapikey (string)
* Google Translate API key:  https://code.google.com/apis/language/translate/v2/getting_started.html
*/
$config['googletranslateapikey'] = '';

/**
* characterset (string)
* Default character set for file import/export
*/
$config['characterset'] = 'auto';

/**
* file_upload_total_space_mb (integer)
* This variable defines the total space available to the file upload question across all surveys in MB. If set to 0 then no limit applies.
*/
$config['file_upload_total_space_mb']= 0;

/**
* ckeditexpandtoolbar (boolean)
* Defines if the CKeditor toolbar should be opened by default
*/
$config['ckeditexpandtoolbar']     = true;

/**
* restrict_to_languages (string)
* This variable defines the languages available in LimeSurvey (front- and backend)
* and should contain a space-separated list of language codes. If empty then no restrictions
* are set and all languages are available
*/
$config['restrict_to_languages'] = '';

/**
* rpc_interface (string)
* This parameter enables/disables the RPC interface
* Set to 'json' (for JSON-RPC) )or 'xml' (for XML-RPC) to enable and 'off' to disable
*/
$config['rpc_interface'] = 'off';

/**
* rpc_publish_api (boolean)
* This parameter enables/disables publishing the API of the RPC interface
* when one visits the admin/remotecontrol page
*/
$config['rpc_publish_api'] = 0;


/**
* session_expiration_time (integer)
* This parameter sets the default session expiration time in seconds
*/
$config['session_expiration_time'] = 28800;

/**
 === Advanced Setup ===================================================================================
The following URL and directory locations do not need to be modified unless you have a non-standard
LimeSurvey installation. Do not change unless you know what you are doing.
*/

if(!isset($argv[0]))
{
    $config['publicurl'] = Yii::app()->baseUrl . '/';                                       // The public website location (url) of the public survey script
}
else
{
    $config['publicurl'] =  '/';
}

// URL locations
$config['homeurl']                 = $config['publicurl'].'admin';                          // The website location (url) of the admin scripts
$config['tempurl']                 = $config['publicurl'].'tmp';
$config['imageurl']                = $config['publicurl'].'images';                         // Location of button bar files for admin script
$config['uploadurl']               = $config['publicurl'].'upload';
$config['standardtemplaterooturl'] = $config['publicurl'].'templates';                      // Location of the standard templates
$config['adminscripts']            = $config['publicurl'].'scripts/admin/';
$config['generalscripts']          = $config['publicurl'].'scripts/';
$config['third_party']             = $config['publicurl'].'third_party/';
$config['styleurl']                = $config['publicurl'].'styles/';
$config['publicstyleurl']          = $config['publicurl'].'styles-public/';
$config['sCKEditorURL']            = $config['third_party'].'ckeditor';
$config['usertemplaterooturl']     = $config['uploadurl'].'/templates';                     // Location of the user templates
$config['adminimageurl']           = $config['styleurl'].$config['admintheme'].'/images/';  // Location of button bar files for admin script
$config['adminstyleurl']           = $config['styleurl'].$config['admintheme'].'/';         // Location of button bar files for admin script

// Directories
$config['rootdir']                 = getcwd();                                             // This is the physical disk location for your limesurvey installation. Normally you don't have to touch this setting.
$config['tempdir']                 = $config['rootdir'].DIRECTORY_SEPARATOR."tmp";         // The directory path where LimeSurvey can store temporary files
$config['imagedir']                = $config['rootdir'].DIRECTORY_SEPARATOR."images";      // The directory path of the image directory
$config['uploaddir']               = $config['rootdir'].DIRECTORY_SEPARATOR."upload";
$config['standardtemplaterootdir'] = $config['rootdir'].DIRECTORY_SEPARATOR."templates";   // The directory path of the standard templates
$config['usertemplaterootdir']     = $config['uploaddir'].DIRECTORY_SEPARATOR."templates"; // The directory path of the user templates
$config['styledir']                = $config['rootdir'].DIRECTORY_SEPARATOR.'styles';

return $config;
