DESC radcheck;
SHOW CREATE TABLE radcheck;

TRUNCATE TABLE radcheck;
TRUNCATE TABLE radreply;
TRUNCATE TABLE radgroupcheck;
TRUNCATE TABLE radgroupreply;
TRUNCATE TABLE radusergroup;


SELECT * FROM radcheck;
SELECT * FROM radreply;
SELECT * FROM radgroupcheck;
SELECT * FROM radgroupreply;
SELECT * FROM radusergroup;


# DEBUG
# SELECT * FROM radpostauth;
# DELETE FROM radcheck WHERE attribute = 'Max-Daily-Session';

# USER
INSERT INTO radcheck (username, attribute, value,op) VALUES ('bob', 'Cleartext-Password', 'passbob',':=');
INSERT INTO radcheck (username, attribute, value,op) VALUES ('bob', 'WISPr-Location-ID', 'DEV01','==');
INSERT INTO radcheck (username, attribute, value,op) VALUES ('bob', 'WISPr-Location-Name', 'Development','==');

# TIME
INSERT INTO radcheck (username, attribute, value,op) VALUES ('bob', 'Max-Daily-Session', '43200',':=');
INSERT INTO radcheck (username, attribute, value,op) VALUES ('bob', 'Max-Weekly-Session', '259200',':=');
INSERT INTO radcheck (username, attribute, value,op) VALUES ('bob', 'Max-Weekly-Session', '120',':=');
# INSERT INTO radcheck (username, attribute, value,op) VALUES ('bob', 'Max-All-Session', '120',':=');

# DATA
INSERT INTO radcheck (username, attribute, value,op) VALUES ('bob', 'Max-Daily-Octets', '41943040',':=');
INSERT INTO radcheck (username, attribute, value,op) VALUES ('bob', 'Max-Weekly-Octets', '268435456',':=');
INSERT INTO radcheck (username, attribute, value,op) VALUES ('bob', 'Max-Monthly-Octets', '1073741824',':=');
INSERT INTO radcheck (username, attribute, value,op) VALUES ('bob', 'Max-All-Octets', '1073741824',':=');

# INSERT INTO radreply (username, attribute, value,op) VALUES ('bob', 'Reply-Message', 'Hello Bob!',':=');
INSERT INTO radreply (username, attribute, value,op) VALUES ('bob', 'Session-Timeout', '90',':=');
INSERT INTO radreply (username, attribute, value,op) VALUES ('bob', 'Port-Limit', '2',':=');
INSERT INTO radreply (username, attribute, value,op) VALUES ('bob', 'WISPr-Redirection-URL', 'https://plus.google.com/',':=');
INSERT INTO radreply (username, attribute, value,op) VALUES ('bob', 'WISPr-Bandwidth-Max-Up', '768000',':=');
INSERT INTO radreply (username, attribute, value,op) VALUES ('bob', 'WISPr-Bandwidth-Max-Down', '3072000',':=');
INSERT INTO radreply (username, attribute, value,op) VALUES ('bob', 'WISPr-Bandwidth-Min-Up', '256000',':=');
INSERT INTO radreply (username, attribute, value,op) VALUES ('bob', 'WISPr-Bandwidth-Min-Down', '1024000',':=');

# INSERT GROUP AND USER TO GROUP
# INSERT INTO radgroupreply (groupname, attribute, value,op) VALUES ('demo', 'Reply-Message', 'Hello PPP protocol!',':=');
# INSERT INTO radgroupreply (groupname, attribute, value,op) VALUES ('demo', 'MT-Rate-Limit', '64000/64000',':=');
# INSERT INTO radgroupcheck (groupname, attribute, value,op) VALUES ('demo', 'Framed-Protocol', 'PPP','==');
# INSERT INTO radusergroup (username, groupname, priority) VALUES ('bob', 'demo', 10);

DROP TABLE IF EXISTS `radusergroup`;
CREATE TABLE `radusergroup` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `groupname` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `priority` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `username` (`username`(32))
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci