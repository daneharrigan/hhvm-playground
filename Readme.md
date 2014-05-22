# hhvm-playground

Live at: http://hhvm-playground.herokuapp.com

HHVM-Playground came about because I wanted to try [Hack](hacklang.org), but
there wasn't an OS X installer. There is a homebrew recipe though.

After a single `brew install hhvm`, ~30 additional packages, and 2-3 hours
later I had HHVM on my computer. Thats a lot of packages and time just to see if
I like a language.

I made HHVM-Playground so people could try out Hack without having to go through
the same lenghty install process.

## Setup

If you don't want to use http://hhvm-playground.herokuapp.com you can always run
your own instance.

```console
$ git clone git@github.com:daneharrigan/hhvm-playground.git
$ cd hhvm-playground
$ heroku create
$ git push heroku master
```

## Todo

I would like to persist code to a database and provide a unique URL for people
to share.
