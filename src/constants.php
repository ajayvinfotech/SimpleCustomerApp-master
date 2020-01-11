<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once "../all_config/common_constants.php";

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ', 'rb');
define('FOPEN_READ_WRITE', 'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 'ab');
define('FOPEN_READ_WRITE_CREATE', 'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
define('EXIT_SUCCESS', 0); // no errors
define('EXIT_ERROR', 1); // generic error
define('EXIT_CONFIG', 3); // configuration error
define('EXIT_UNKNOWN_FILE', 4); // file not found
define('EXIT_UNKNOWN_CLASS', 5); // unknown class
define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
define('EXIT_USER_INPUT', 7); // invalid user input
define('EXIT_DATABASE', 8); // database error
define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


define('DEFAULT_LANG', 'en');

/* TABLE NAMES */

define('ADMIN_ACTIVE_LOGIN'			,'admin_active_login');
define('ADMIN'						,'admin');
define('ADMIN_ROLES'				,'admin_roles');
define('ADMIN_ROLES_RIGHTS'			,'admin_roles_rights');
define('ACTIVE_LOGIN'				,'active_login');
define('CONTEST'					,'contest');
define('LEAGUE'                     ,'league');
define('LEAGUE_DURATION'            ,'league_duration');
define('MASTER_DURATION'            ,'master_duration');
define('LEAGUE_DRAFTING_STYLES'     ,'league_drafting_styles');
define('LEAGUE_CONTEST_TYPE'     	,'league_contest_type');
define('MASTER_DRAFTING_STYLES'     ,'master_drafting_styles');
define('LEAGUE_SALARY_CAP'     		,'league_salary_cap');
define('MASTER_CONTEST_TYPE'     	,'master_contest_type');
define('USER'						,'user');
define('MASTER_COUNTRY'				,'master_country');
define('MASTER_STATE'				,'master_state');
define('LEAGUE_LINEUP_POSITION'     ,'league_lineup_position');
define('ROSTER_CATEGORY'     		,'roster_category');
define('PAYMENT_WITHDRAW_TRANSACTION'	,'payment_withdraw_transaction');
define('NOTIFICATION'	,'notification');
define('MASTERDESCRIPTION'	,'master_description');
define('RANGE_MASTER'	,'range_master');
define('AFFILIATE_MASTER'	,'affiliate_master');
define('USER_AFFILIATE_HISTORY'	,'user_affiliate_history');
define('SHORT_URLS'		,'short_urls');
define('CAMPAIGN'		,'campaign');

// Cricket Format Type
define('CRICKET_ONE_DAY'     				,1);
define('CRICKET_TEST'     					,2);
define('CRICKET_T20'     					,3);

define('REFERRAL_FUND'						,'referral_fund');
define('REFERRAL'						,'refferal');

define('ADMIN_PAN_VERIFY_NOTI','for Pan Card verification');

define('BONUS_FUND'						,'bonus_fund');
define('BONUS'						,'bonus');

define('ADS_POSITION'						,'ad_position');
define('ADS_MANAGEMENT'						,'ad_management');

define('SALES_PERSON'						,'sales_person');
define('PROMO_CODE_EARNING'					,'promo_code_earning');
define('PROMO_CODE'							,'promo_code');
define('PROMO_CODE_PAID_EARNING'			,'promo_code_paid_earnings');

define('LINEUP_MASTER'						,'lineup_master');
define('PAYMENT_HISTORY_TRANSACTION'		,'payment_history_transaction');
define('ANALYTICS_USER_LOGIN'				,'analytics_user_login');
define('PAYMENT_DEPOSIT_TRANSACTION'		,'payment_deposit_transaction');
define('BLOG'								,'blog');
define('BLOG_COMMENTS'						,'blog_comments');

define('TEAM'								,'team');
define('TEAM_LEAGUE'						,'team_league');
define('TEMP_LINEUP_MASTER_CONTEST'         ,'TEMP_LINEUP_MASTER_CONTEST');

define('REFFERAL'	,'refferal');

define('ADMIN_USER_NOTI','by admin');

define('ORDER'	,'order');
define('TRANSACTION'	,'transaction');
define('USER_BANK_DETAIL'	,'user_bank_detail');
define('EMAIL_TEMPLATE'	,'email_template');

/* Sponsor Tables*/
define('SPONSOR_ACTIVITY'		,'sponsor_activity');
define('SPONSOR_POLL_OPTIONS'	,'sponsor_poll_options');
define('SPONSOR_SURVEY_OPTIONS'	,'sponsor_survey_options');
define('SPONSOR_SURVEY_QUESTION','sponsor_survey_question');
define('SPONSOR_PROMO_CODE','sponsor_promo_code');

define('PRODUCT_CATEGORY_MASTER','product_category_master');
define('PRODUCT_MASTER','product_master');
define('PRODUCT_SIZE_STOCK','product_size_stock');

define('CMS_PAGES','cms_pages');
define('MODULE_CONFIG','module_config');

//For promotion 
define('PROMOTION','promotion');

// Login sessin key for logged in user 
define('SUPERADMIN_ROLE' , 1);
define('SUBADMIN_ROLE' , 2);
define( 'DISTRIBUTOR_ROLE' , 3);
define( 'SUB_DISTRIBUTOR_ROLE' , 4);
define('AUTH_KEY', 'session_key');
define('CURRENCY_CODE', '$ ');
define('CURRENCY', 'USD');
define('IS_LOCAL_TIME' , TRUE);
define('BACK_YEAR', '0 month');

define('DEFAULT_TIME_ZONE_ABBR', '');

define('SITE_TITLE', 'vSports');
define('MYSQL_DATE_TIME_FORMAT', '%d-%b-%Y %H:%i');
define('MYSQL_DATE_FORMAT', '%d-%b-%Y');
define('MYSQL_DATE_FORMAT_CONTEST', '%b %d, %a %Y');
define('PHP_DATE_FORMAT', 'd-M-Y h:i A');
define('PROFILE', 'upload/');
define('UPLOAD_DIR', 'upload/');
define('ROSTER_DIR', 'upload/roster/');
define('TEAMFEED_DIR', 'upload/team/');
define('SEASONFEED_DIR', 'upload/season/');
define('FEATURE_CONTEST_DIR', 'upload/feature_contest/');
define('NOTIFICATION_IMG_DIR', 'upload/desktop_notification/');
define('MERCHANDISE_CONTEST_DIR', 'upload/merchandise/');
define('JERSEY_CONTEST_DIR', 'upload/jersey/');
define('FLAG_CONTEST_DIR', 'upload/flag/');
define('AVATAR_CONTEST_DIR', 'upload/avatar/');
define('DEFAULT_PROFILE', 'assets/img/default-user.png');
define('DEFAULT_PROFILE_SMALL', 'assets/img/default_small.png');
define('PROFILE_THUMB','upload/logo/');
define( 'PROJECT_NAME_WITHOUT_SPACE','Pickdraft');
define( 'PROJECT_NAME','Pickdraft');
define('AD_IMAGE_DIR', 'upload/advertisement/');
define('BLOG_IMAGE_DIR', 'upload/blog/');
define('FEEDBACK_IMAGE_DIR', 'upload/feedback/');
define('DEFAULT_BLOG_IMAGE','assets/img/blog-default.png');
define('SPONSOR_DIR', 'upload/sponsor/');
// config contest for 
define('CONTEST_FOR'	,'GT');

//********************************//
define('TRANSACTION_HISTORY_DESCRIPTION_ENTRY_FEE'			, 1);
define('TRANSACTION_HISTORY_DESCRIPTION_ENTRY_FEE_REFUND'	, 2);
define('PRIZE_WON_DESCRIPTION'								, 3);
define('TRANSACTION_HISTORY_DESCRIPTION_REFERRAL_FUND'		, 4);
define('TRANSACTION_HISTORY_DESCRIPTION_ENTRY_FEE_FOR'		, 5);
define('TRANSACTION_HISTORY_DESCRIPTION_DEPOSIT_BY_ADMIN'	, 6);
define('TRANSACTION_HISTORY_DESCRIPTION_WITHDRAWAL_BY_ADMIN', 7);
define('TRANSACTION_HISTORY_DESCRIPTION_DEPOSIT'			, 8);
define('TRANSACTION_HISTORY_BONUS_DEBITED'					, 9);
define('TRANSACTION_HISTORY_BONUS_CONVERT_BALANCE'			, 10);
define('TRANSACTION_HISTORY_DESCRIPTION_WITHDRAWAL'			, 11);
define('TRANSACTION_HISTORY_BONUS_CREDITED'					, 12);
define('TRANSACTION_HISTORY_PRE_LAUNCH_BONUS'				, 13);
define('PRIZE_ROLL_BACK'                                                , 14);
define('TRANSACTION_HISTORY_GAME_JOIN_POINT_CONVERT_BONUS'		, 15);

define('CASH_REAL'                      , '0');
define('CASH_BONUS'                     , '1');
define('CASH_REAL_BONUS'                , '2');

define('PLATEFORM_FANTASY'                , '1');
define('PRO_TYPE'                , 'GT');

define( 'USER_INVITATION_MAIL_SUBJECT','Invitation From Pickdraft');
define( 'DISTRIBUTOR_INVITATION_MAIL_SUBJECT','Invitation From Pickdraft');

define( 'DRAFTING_STYLE_QUICK',3);
define( 'DRAFTING_STYLE_TURBO',2);
define( 'DRAFTING_STYLE_SALARY_CAP',1);


define('UNCAPPED_MAX_SIZE',200000);
define("ROSTER_LIMIT"					, 30);

define("FEEDBACK_EMAIL", "yash.bodane@vinfotech.com");


//define AMQP(RabbitMQ) credentials and contsnts


switch (ENVIRONMENT)
{
	case 'development':
 
		
		define('APP_ROOT_PATH', $_SERVER['DOCUMENT_ROOT']."/admin/");
        define('APP_ADMIN_PATH', $_SERVER['SERVER_NAME']."/admin/");
		
		
		define('FCM_SERVER_KEY' ,'AIzaSyAbI2vJtkIilJ9SBZGSflvWXQgoruXea5k');

	break;

	case 'testing':

		define('APP_ROOT_PATH', $_SERVER['DOCUMENT_ROOT']."/admin/");

        define('APP_ADMIN_PATH', $_SERVER['SERVER_NAME']."/admin/");
		

		define('FCM_SERVER_KEY' ,'AIzaSyAbI2vJtkIilJ9SBZGSflvWXQgoruXea5k');

	break;
	case 'demo':

		define('APP_ROOT_PATH', $_SERVER['DOCUMENT_ROOT']."/admin/");

        define('APP_ADMIN_PATH', $_SERVER['SERVER_NAME']."/admin/");
		

		define('FCM_SERVER_KEY' ,'AIzaSyAbI2vJtkIilJ9SBZGSflvWXQgoruXea5k');

	break;

	case 'production':
		define('APP_ROOT_PATH', $_SERVER['DOCUMENT_ROOT']."/admin/");

        define('APP_ADMIN_PATH', $_SERVER['SERVER_NAME']."/admin/");

        define('FCM_SERVER_KEY' ,'AIzaSyAbI2vJtkIilJ9SBZGSflvWXQgoruXea5k');
	break;

	default:
	break;
}

