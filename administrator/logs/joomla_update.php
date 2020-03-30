#
#<?php die('Forbidden.'); ?>
#Date: 2020-03-27 21:08:21 UTC
#Software: Joomla Platform 13.1.0 Stable [ Curiosity ] 24-Apr-2013 00:00 GMT

#Fields: datetime	priority clientip	category	message
2020-03-27T21:08:20+00:00	INFO ::1	update	Update started by user Super User (680). Old version is 3.9.15.
2020-03-27T21:08:26+00:00	INFO ::1	update	Downloading update file from https://s3-us-west-2.amazonaws.com/joomla-official-downloads/joomladownloads/joomla3/Joomla_3.9.16-Stable-Update_Package.zip?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAIZ6S3Q3YQHG57ZRA%2F20200327%2Fus-west-2%2Fs3%2Faws4_request&X-Amz-Date=20200327T210814Z&X-Amz-Expires=60&X-Amz-SignedHeaders=host&X-Amz-Signature=7cff1e9ee657db8ce28246bf82e784969afe95cea832b7992abeac3df761d86e.
2020-03-27T21:10:18+00:00	INFO ::1	update	File Joomla_3.9.16-Stable-Update_Package.zip downloaded.
2020-03-27T21:10:19+00:00	INFO ::1	update	Starting installation of new version.
2020-03-27T21:14:56+00:00	INFO ::1	update	Finalising installation.
2020-03-27T21:14:58+00:00	INFO ::1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__categories` MODIFY `description` mediumtext;.
2020-03-27T21:14:59+00:00	INFO ::1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__categories` MODIFY `params` text;.
2020-03-27T21:15:01+00:00	INFO ::1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__fields` MODIFY `default_value` text;.
2020-03-27T21:15:02+00:00	INFO ::1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__fields_values` MODIFY `value` text;.
2020-03-27T21:15:02+00:00	INFO ::1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__finder_links` MODIFY `description` text;.
2020-03-27T21:15:03+00:00	INFO ::1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__modules` MODIFY `content` text;.
2020-03-27T21:15:04+00:00	INFO ::1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_body` mediumtext;.
2020-03-27T21:15:05+00:00	INFO ::1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_params` text;.
2020-03-27T21:15:07+00:00	INFO ::1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_images` text;.
2020-03-27T21:15:11+00:00	INFO ::1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_urls` text;.
2020-03-27T21:15:13+00:00	INFO ::1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_metakey` text;.
2020-03-27T21:15:15+00:00	INFO ::1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_metadesc` text;.
2020-03-27T21:15:16+00:00	INFO ::1	update	Ran query from file 3.9.16-2020-03-04. Query text: ALTER TABLE `#__users` DROP INDEX `username`;.
2020-03-27T21:15:16+00:00	INFO ::1	update	Ran query from file 3.9.16-2020-03-04. Query text: ALTER TABLE `#__users` ADD UNIQUE INDEX `idx_username` (`username`);.
2020-03-27T21:15:16+00:00	INFO ::1	update	Deleting removed files and folders.
2020-03-27T21:15:33+00:00	INFO ::1	update	Cleaning up after installation.
2020-03-27T21:15:33+00:00	INFO ::1	update	Update to version 3.9.16 is complete.
