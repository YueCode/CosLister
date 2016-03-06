# COS Index
腾讯云COS Index工具

## Feature
 - 腾讯云COS 本身不支持Index功能。所以开发了这个脚本系统。
 - 目前只是列表，后期打算把删除、上传融合进去。
 - 支持API和index.html分类。一开始考虑的COS支持放置index.html不过后面发现不支持
 - 支持多级目录访问


## 使用用方法
1. 将index.php config.inc.php Slim Qcloud_cos 以及.htaccess文件上传到一个支持PHP的空间（可以放在博客的二级目录里,不过要修改.htaccess）
2. 修改config.inc.php为你自己的信息
3. 将index.html中第26行的api改为你的index.php的文件目录，如"http://www.ixiqin.com/api",最后不加斜杠
4. 访问index.html文件
 
##关于伪静态
对于Apache，我已经提供了.Htaccess文件了。可以直接使用。
Nginx用户可以将你的API为如下的格式，无需伪静态即可正常工作！
`var	api="http://demo.com/index.php"`

##联系方式
QQ:894849635
Email:xiqingongzi at gmail.com
