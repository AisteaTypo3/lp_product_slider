CREATE TABLE tt_content (
  tx_aistealpproductslider_slides int(11) unsigned DEFAULT '0' NOT NULL,
  tx_aistealpproductslider_hslides int(11) unsigned DEFAULT '0' NOT NULL,
  tx_aistealpproductslider_layout_mode varchar(20) DEFAULT 'default' NOT NULL,
  tx_aistealpproductslider_breakpoint_mobile int(11) unsigned DEFAULT '768' NOT NULL,
  tx_aistealpproductslider_reduced_motion_behavior varchar(30) DEFAULT 'static' NOT NULL,
  tx_aistealpproductslider_video_autoplay_desktop tinyint(1) unsigned DEFAULT '1' NOT NULL,
  tx_aistealpproductslider_video_autoplay_mobile tinyint(1) unsigned DEFAULT '0' NOT NULL,
  tx_aistealpproductslider_preload_strategy varchar(20) DEFAULT 'smart' NOT NULL,
  tx_aistealpproductslider_stage_aspect_ratio varchar(20) DEFAULT '1/1' NOT NULL,
  tx_aistealpproductslider_theme varchar(20) DEFAULT 'dark' NOT NULL
);

CREATE TABLE tx_aistealpproductslider_slide (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,
  tstamp int(11) unsigned DEFAULT '0' NOT NULL,
  crdate int(11) unsigned DEFAULT '0' NOT NULL,
  cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
  deleted tinyint(1) unsigned DEFAULT '0' NOT NULL,
  hidden tinyint(1) unsigned DEFAULT '0' NOT NULL,
  starttime int(11) unsigned DEFAULT '0' NOT NULL,
  endtime int(11) unsigned DEFAULT '0' NOT NULL,
  sorting int(11) unsigned DEFAULT '0' NOT NULL,
  parentid int(11) unsigned DEFAULT '0' NOT NULL,
  parenttable varchar(255) DEFAULT 'tt_content' NOT NULL,

  sys_language_uid int(11) DEFAULT '0' NOT NULL,
  l10n_parent int(11) unsigned DEFAULT '0' NOT NULL,
  l10n_diffsource mediumblob,
  t3ver_label varchar(255) DEFAULT '' NOT NULL,

  title varchar(255) DEFAULT '' NOT NULL,
  bodytext text,
  slide_type varchar(30) DEFAULT 'image' NOT NULL,
  aria_label varchar(255) DEFAULT '' NOT NULL,

  model_autorotate tinyint(1) unsigned DEFAULT '0' NOT NULL,
  model_camera_preset varchar(20) DEFAULT 'front' NOT NULL,
  model_bg_color varchar(20) DEFAULT '' NOT NULL,
  color_variants text,

  PRIMARY KEY (uid),
  KEY parent (parentid, parenttable),
  KEY language (l10n_parent, sys_language_uid)
);

CREATE TABLE tx_aistealpproductslider_hslide (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,
  tstamp int(11) unsigned DEFAULT '0' NOT NULL,
  crdate int(11) unsigned DEFAULT '0' NOT NULL,
  cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
  deleted tinyint(1) unsigned DEFAULT '0' NOT NULL,
  hidden tinyint(1) unsigned DEFAULT '0' NOT NULL,
  starttime int(11) unsigned DEFAULT '0' NOT NULL,
  endtime int(11) unsigned DEFAULT '0' NOT NULL,
  sorting int(11) unsigned DEFAULT '0' NOT NULL,
  parentid int(11) unsigned DEFAULT '0' NOT NULL,
  parenttable varchar(255) DEFAULT 'tt_content' NOT NULL,

  sys_language_uid int(11) DEFAULT '0' NOT NULL,
  l10n_parent int(11) unsigned DEFAULT '0' NOT NULL,
  l10n_diffsource mediumblob,
  t3ver_label varchar(255) DEFAULT '' NOT NULL,

  title varchar(255) DEFAULT '' NOT NULL,
  headline varchar(255) DEFAULT '' NOT NULL,
  slide_type varchar(30) DEFAULT 'image' NOT NULL,
  sequence_fps int(11) unsigned DEFAULT '12' NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (parentid, parenttable),
  KEY language (l10n_parent, sys_language_uid)
);
