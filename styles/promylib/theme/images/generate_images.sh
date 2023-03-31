#!/usr/bin/env bash

read_mode_images="announce_read.gif announce_read_locked.gif announce_read_locked_mine.gif announce_read_mine.gif\
 forum_link.gif forum_read.gif forum_read_locked.gif forum_read_subforum.gif\
 no_avatar.gif\
 sticky_read.gif sticky_read_locked.gif sticky_read_locked_mine.gif sticky_read_mine.gif\
 topic_moved.gif topic_read.gif topic_read_hot.gif topic_read_hot_mine.gif topic_read_locked.gif topic_read_locked_mine.gif topic_read_mine.gif"

unread_mode_images="announce_unread.gif announce_unread_locked.gif announce_unread_locked_mine.gif announce_unread_mine.gif\
 forum_unread.gif forum_unread_locked.gif forum_unread_subforum.gif\
 sticky_unread.gif sticky_unread_locked.gif sticky_unread_locked_mine.gif sticky_unread_mine.gif\
 topic_unread.gif topic_unread_hot.gif topic_unread_hot_mine.gif topic_unread_locked.gif topic_unread_locked_mine.gif topic_unread_mine.gif"

this_dir=$(dirname "$0")
prosilver_image_dir="$this_dir/../../../prosilver/theme/images"

for image in $read_mode_images; do
	convert "$prosilver_image_dir/$image" +level-colors '#b73a24', $image
done

for image in $unread_mode_images; do
	convert "$prosilver_image_dir/$image" +level-colors brown,'#ffde84' $image
done
