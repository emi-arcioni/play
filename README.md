# Forking
In order to push, you will need to fork this into your github account for write permission.
When you fork this, you will need to change `"url": "https://github.com/fuqu-io/play"` to point at your repo.

# play
Add this to your composer.json

 `"repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/fuqu-io/play"
    }
]`

run `composer require fuqu-io/play dev-master`

add vendor/fuqui-io/play to your IDE git config
