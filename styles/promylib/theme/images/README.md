Images are generated from the prosilver set of images with the help of ImageMagick:

1. Image for “read” mode were converted with following command:

```
convert PATH_TO/prosilver/theme/images/IMAGE +level-colors '#b73a24', IMAGE
```

2. Images for “unread” mode were generated with following command:

```
convert PATH_TO/prosilver/theme/images/IMAGE +level-colors brown,'#ffde84' IMAGE
```
