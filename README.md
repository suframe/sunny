# suframe-sunny
> thinkphp ngrok内网穿透库

开发交流QQ群：647344518   [立即加群](http://shang.qq.com/wpa/qunwpa?idkey=83a58116f995c9f83af6dc2b4ea372e38397349c8f1973d8c9827e4ae4d9f50e)     

在开发过程中，经常需要用到外网访问接口，比如公众号，小程序等。上传到服务器上调试总是比较麻烦，ngrok可以解决您的这个问题，让你本地开发程序可以外网访问

sunny是一个提供免费和收费内网穿透的工具，此库就是用于集成到thinkphp，让程序可外网访问。支持http,https,tcp转发

**可绑定自定义域名或者使用免费3级域名**

## 注册账户：
> 注意开通隧道的时候如果你想所有人可访问，不要设置http验证用户名和密码
- 1.登录http://www.ngrok.cc，注册账户   
- 2.按教程开通隧道：http://www.ngrok.cc/_book/general/open.html 选择香港Ngrok免费服务器，当然有速度要求的可以选择付费，也不贵
- 3.如果是定义域名，请按教程解析http://www.ngrok.cc/_book/general/hostname.html
- 4.复制隧道id 

### 安装：
```
composer install suframe/sunny
```
修改config/sunny.php
clientid => '上面创建的隧道id',

### 运行:
> 运行前请先启动你的项目保证本地可访问，否则转发无法接受数据
```
php think sunny
```
访问你隧道绑定的或者赠送的域名即可. 开始愉快的开发吧