CREATE TABLE /*$wgDBprefix*/globalblocks (
	gb_id int NOT NULL auto_increment,
	gb_address varchar(255) NOT NULL,
	gb_by varchar(255) NOT NULL,
	gb_by_wiki varbinary(255) NOT NULL,
	gb_reason TINYBLOB NOT NULL,
	gb_timestamp binary(14) NOT NULL,
	gb_anon_only bool NOT NULL default 0,
	gb_expiry varbinary(14) NOT NULL default '',
	gb_range_start varbinary(35) NOT NULL,
	gb_range_end varbinary(35) NOT NULL,

	PRIMARY KEY gb_id (gb_id),

	UNIQUE INDEX gb_address (gb_address, gb_anon_only),

	INDEX gb_range (gb_range_start, gb_range_end),
	INDEX gb_timestamp (gb_timestamp),
	INDEX gb_expiry (gb_expiry)
) /*$wgDBTableOptions*/;

CREATE TABLE /*$wgDBprefix*/global_block_whitelist (
	gbw_id int(11) NOT NULL, -- Key to gb_id in globalblocks database.
	gbw_address varbinary(255) NOT NULL,
	gbw_by int(11) NOT NULL, -- Key to user_id
	gbw_by_text varchar(255) NOT NULL,
	gbw_reason varchar(255) NOT NULL,
	gbw_expiry binary(14) NOT NULL,
	PRIMARY KEY (gbw_id),
	KEY (gbw_by)
) /*$wgDBTableOptions*/;
