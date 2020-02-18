<?php
/*******************************************************************
* Glype is copyright and trademark 2007-2016 UpsideOut, Inc. d/b/a Glype
* and/or its licensors, successors and assigners. All rights reserved.
*
* Use of Glype is subject to the terms of the Software License Agreement.
* http://www.glype.com/license.php
*******************************************************************
*
* BY USING THIS DISCLAIMER, YOU ACKNOWLEDGE AND AGREE THAT ALL INFORMATION
* CONTAINED HEREIN DOES NOT CONSTITUTE LEGAL ADVICE OF ANY KIND OR NATURE.
* PLEASE CONSULT WITH LEGAL COUNSEL BEFORE USING THIS DISCLAIMER.
*
/*****************************************************************
* Initialize glype
******************************************************************/

require 'includes/init.php';


/*****************************************************************
* Create content
******************************************************************/

$content = <<<OUT
	<h2 class="first">免责声明</h2>
	<p>本服务按原样提供，不作任何保证。使用本服务的风险完全由您自己承担。因使用本服务而造成的任何直接或间接损害，我们概不负责。</p>
	<p>该服务允许间接浏览外部第三方网站。我们不对通过我们的服务可以访问的任何外部网站上的内容负责。通过我们的服务浏览的网站不属于本网站或与本网站相关。</p>
	<p>术语“间接浏览”是指您连接到的服务器。在“直接”浏览期间，连接到提供所请求资源的服务器。在“间接”浏览期间，您连接到我们的服务器。我们的脚本下载请求的资源并将其转发给您。</p>
	<p>通过我们的服务下载的任何资源（如网页、图像、文件）都可以修改。这可能包括但不限于编辑url，以便间接下载目标资源引用的任何资源。这一过程的准确性和可靠性是无法保证的。您收到的资源可能不是所请求资源的准确表示。</p>
	<p>间接浏览的副作用可能是匿名性。通过连接到我们的服务器而不是目标服务器，目标服务器看不到您的IP地址。但是，我们不保证我们的服务将是真正的匿名。下载的资源可能会引用浏览器可能自动下载的其他资源。该服务试图通过我们的服务器重新路由所有此类请求，但可能并不完全成功。一个直接的请求会损害你的匿名性。</p>
	<p>此服务可以通过安全连接下载资源，但可以通过不安全连接发送回您。除非您与我们的服务器建立了安全连接，否则不要输入机密信息。</p>
	<h2 class="first">修改说明</h2>
	<p>本版本由墨涩基于 Glype® v1.4.15.二次开发</p>
	<p>1.汉化部分常用菜单选项</p>
	<p>2.主页同步更新每日必应壁纸作为背景</p>
	<p>3.添加Favicon.ico浏览器图标</p>
	
OUT;


/*****************************************************************
* Send content wrapped in our theme
******************************************************************/

echo replaceContent($content);
