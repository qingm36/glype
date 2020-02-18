<?php
/*******************************************************************
* Glype is copyright and trademark 2007-2015 UpsideOut, Inc. d/b/a Glype
* and/or its licensors, successors and assigners. All rights reserved.
*
* Use of Glype is subject to the terms of the Software License Agreement.
* http://www.glype.com/license.php
*******************************************************************
* Our settings file. Self-explanatory - stores the config values.
*******************************************************************
* This file has been automatically generated by the glype admin tool.
* For a more complete and thorough explanation of options, consult
* the original settings.php file from the glype package.
******************************************************************/


/*****************************************************************
* 特殊选项
******************************************************************/

# If you have purchased a license, please enter your license key
# here. Leave blank if you don't have a license.
$CONFIG['license_key'] = '';

# BlockScript is security software which protects websites and
# empowers webmasters to stop unwanted traffic.
$CONFIG['enable_blockscript'] = false;


/*****************************************************************
* 安装选项
******************************************************************/

# Theme/skin to use. This should be the name of the appropriate
# folder inside the /themes/ folder.
$CONFIG['theme'] = 'default';

# Run plugins on these websites
$CONFIG['plugins'] = 'facebook.com,google.com,hotmail.com,live.com,msn.com,myspace.com,twitter.com,yahoo.com,youtube.com,ytimg.com';

# Temporary directory used by the script. Many features require
# write permission to the temporary directory. Ensure this
# directory exists and is writable for best performance.
$CONFIG['tmp_dir'] = GLYPE_ROOT . '/tmp/';

# Use GZIP compression when sending pages back to the user. This
# reduces bandwidth usage but at the cost of increased CPU load.
$CONFIG['gzip_return'] = true;

# Warn users before browsing a secure site if on an insecure
# connection. This option has no effect if your proxy is on https.
$CONFIG['ssl_warning'] = true;

# The fastest and most reliable method of ensuring javascript is
# properly proxied is to override the native javascript functions
# with our own. However, this may interfere with any other
# javascript added to the page, such as ad codes.
$CONFIG['override_javascript'] = false;

# This option fetches the server load and stops the script serving
# pages whenever the server load goes over the limit specified. Set
# to 0 to disable this feature.
$CONFIG['load_limit'] = 0;

# Anything specified here will be added to the bottom of all
# proxied pages just before the </body> tag.
$CONFIG['footer_include'] = '';


/*****************************************************************
* URL编码选项
******************************************************************/

# Formats URLs as browse.php/aHR0... instead of
# browse.php?u=aHR0... Path info may not be available on all
# servers.
$CONFIG['path_info_urls'] = false;


/*****************************************************************
* 直接链接
******************************************************************/

# This option prevents users "hotlinking" directly to a proxied
# page and forces all users to first visit the index page. Note:
# hotlinking is also prevented when the "Encrypt URL" option is
# enabled.
$CONFIG['stop_hotlinking'] = true;

# If the above option is enabled, you can add individual referrers
# that are allowed to bypass the hotlinking protection. Note:
# hotlinking is also prevented when the "Encrypt URL" option is
# enabled.
$CONFIG['hotlink_domains'] = array();


/*****************************************************************
* 登录中
******************************************************************/

# Enable/disable the logging feature. If disabled, skip the rest of
# this section.
$CONFIG['enable_logging'] = false;

# Enter a destination for log files. A new log file will be created
# each day in the directory specified. The directory must be
# writable. To protect against unauthorized access, place the log
# folder above your webroot.
$CONFIG['logging_destination'] = $CONFIG['tmp_dir'] . 'logs/';

# You can avoid huge log files by only logging requests for .html
# pages, as per the default setting. If you want to log all
# requests (images, etc.) as well, enable this.
$CONFIG['log_all'] = false;


/*****************************************************************
* 网站访问控制
******************************************************************/

# Block everything except these websites
$CONFIG['whitelist'] = array();

# Block these websites
$CONFIG['blacklist'] = array();


/*****************************************************************
* 用户访问控制
******************************************************************/

# 
$CONFIG['ip_bans'] = array();


/*****************************************************************
* 转移选项
******************************************************************/

# Time to wait for while establishing a connection to the target
# server. If the connection takes longer, the transfer will be
# aborted.
$CONFIG['connection_timeout'] = 5;

# Time to allow for the entire transfer. You will need a longer
# time limit to download larger files.
$CONFIG['transfer_timeout'] = 0;

# Preserve bandwidth by limiting the size of files that can be
# downloaded through your proxy.
$CONFIG['max_filesize'] = 0;

# Preserve bandwidth by limiting the speed at which files are
# downloaded through your proxy. Note: if limiting download speed,
# you may need to increase the transfer timeout to compensate.
$CONFIG['download_speed_limit'] = 0;

# This forwards any requested ranges from the client and this makes
# it possible to resume previous downloads. Depending on the "Queue
# transfers" option below, it may also allow users to download
# multiple segments of a file simultaneously.
$CONFIG['resume_transfers'] = false;

# You can limit use of your proxy to allow only one transfer at a
# time per user. Disable this for faster browsing.
$CONFIG['queue_transfers'] = true;


/*****************************************************************
* Cookies
******************************************************************/

# If enabled, cookies will be stored in the folder specified below.
$CONFIG['cookies_on_server'] = false;

# If storing cookies on the server, specify a folder to save the
# cookie data in. To protect against unauthorized access, place the
# cookie folder above your webroot.
$CONFIG['cookies_folder'] = $CONFIG['tmp_dir'] . 'cookies/';

# You can encode cookie names, domains and values with this option
# for optimum privacy but at the cost of increased server load and
# larger cookie sizes. This option has no effect if storing cookies
# on server.
$CONFIG['encode_cookies'] = false;


/*****************************************************************
* 保养
******************************************************************/

# How often to clear the temporary files created by the script?
$CONFIG['tmp_cleanup_interval'] = 0;

# When should old log files be deleted? This option has no effect
# if the above option is disabled.
$CONFIG['tmp_cleanup_logs'] = 0;


/*****************************************************************
* 用户可配置选项
******************************************************************/

$CONFIG['options']['Encrypt URL'] = array(
	'title'	 => '加密 URL',
	'desc'	 => '加密您正在查看的页面的URL以增加隐私。注意：此选项用于隐藏URL，不提供安全性。使用SSL实现实际的安全性.',
	'default' => true,
	'force'	 => false
);

$CONFIG['options']['Encrypt Page'] = array(
	'title'	 => '加密页面',
	'desc'	 => '通过在发送页面前对其进行加密，并在收到页面后使用javascript对其进行解密，有助于避免筛选。. 注意：此选项用于隐藏HTML源代码，不提供安全性。使用SSL实现实际的安全性.',
	'default' => false,
	'force'	 => false
);

$CONFIG['options']['showForm'] = array(
	'title'	 => '显示窗体',
	'desc'	 => '这在每个页面的顶部提供了一个小表单，允许您快速跳转到另一个站点，而不必返回我们的主页.',
	'default' => true,
	'force'	 => true
);

$CONFIG['options']['allowCookies'] = array(
	'title'	 => '允许Cookies',
	'desc'	 => '在互动网站上可能需要Cookies（特别是在你需要登录的地方），但广告商也使用Cookies来跟踪你的浏览习惯.',
	'default' => true,
	'force'	 => false
);

$CONFIG['options']['tempCookies'] = array(
	'title'	 => '强制使用临时cookie',
	'desc'	 => '此选项将覆盖所有Cookie的到期日期，并将其设置为仅在会话结束时-关闭浏览器时将删除所有Cookie。（推荐）',
	'default' => true,
	'force'	 => true
);

$CONFIG['options']['stripTitle'] = array(
	'title'	 => '删除标题',
	'desc'	 => '从代理页面移除标题.',
	'default' => false,
	'force'	 => true
);

$CONFIG['options']['stripJS'] = array(
	'title'	 => '删除脚本',
	'desc'	 => '删除脚本以保护匿名性并加速页面加载。然而，并不是所有的网站都会提供一个只有HTML的选择。（推荐）',
	'default' => true,
	'force'	 => false
);

$CONFIG['options']['stripObjects'] = array(
	'title'	 => '删除对象',
	'desc'	 => '您可以通过删除不必要的Flash、Java和其他对象来增加页面加载时间。如果不删除，这些也可能损害您的匿名性.',
	'default' => true,
	'force'	 => false
);


/*****************************************************************
* Do not edit this section manually!
******************************************************************/

# Settings file version for determining compatibility with admin
# tool.
$CONFIG['version'] = '1.4.15';

//---PRESERVE ME---
// Anything below this line will be preserved when the admin control panel rewrites
// the settings. Useful for storing settings that don't/can't be changed from the control panel
