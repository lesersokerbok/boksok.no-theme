# Boksok.no WP Theme

Based on the [Roots Theme](http://roots.io/).

## Dev usage

1. Create symlink to `wp-content/themes/boksok.no-theme` in `wp-content/themes/` folder of you wp installation:
    ```
    $ ln -s path/to/wp/installation/wp-content/themes/boksok.no-theme path/to/this/repository/wp-content/themes/boksok.no-theme
    ```
2. Change the directory to the boksok.no-theme folder
3. Run `npm install` to install packages as indicated in `package.json`

### Generate css/js

1. Run `grunt` to generate css and js files.

## Deployment

### First time
1. Add your public ssh key (`id_rsa.pub`) to the git push keys in wp-engine
2. Wait 10 minutes
3. Check that your key works:
    ```
    $ ssh git@git.wpengine.com info
    The authenticity of host 'git.wpengine.com (50.116.20.222)' can't be established.
    RSA key fingerprint is 19:17:ee:d2:1d:8d:c9:3e:dc:3e:0d:21:a7:c6:52:fc.
    Are you sure you want to continue connecting (yes/no)? y
    Please type 'yes' or 'no': yes
    Warning: Permanently added 'git.wpengine.com,50.116.20.222' (RSA) to the list of known hosts.

    // You should now get a list of git remotes
    ```
4. Next you have to add the remote of your choice
    (this example is for lsbmultitest):
    ```
    $ git remote add wpengine-test git@git.wpengine.com:production/lsbmultitest.git
    $ git remote -v
    origin	git@github.com:lesersokerbok/boksok.no-theme.git (fetch)
    origin	git@github.com:lesersokerbok/boksok.no-theme.git (push)
    wpengine-test	git@git.wpengine.com:production/lsbmultitest.git (fetch)
    wpengine-test	git@git.wpengine.com:production/lsbmultitest.git (push)
    ```

### Deploy!

```
$ git push wpengine-test master
```
