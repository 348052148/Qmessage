# Qmessage
一个php版本的消息处理器

### 描述
一个消息队列的处理核心。可以方便的使用其他驱动（如memcache,mq）实现消息队列，
场景：主要用于从来源方送达最终方的处理。
### 测试方式
```
php Server/inc.php 启动服务端监听

php Client/inc.php 发送一条消息

```
