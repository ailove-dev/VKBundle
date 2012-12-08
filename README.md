VKBundle
========

Bundle for an authentication via VKontakte social network

To get several providers work together you should use chain provider:

```yml
    providers:
        chain_provider:
            chain:
                providers: [ fos_userbundle, vk_provider ]
        fos_userbundle:
            id: fos_user.user_provider.username_email
        vk_provider:
            id: vk.user.provider
```
