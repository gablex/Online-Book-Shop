# Dumped by C99Shell.SQL v. 1.0 pre-release build #16
# Home page: http://ccteam.ru
#
# Host settings:
# MySQL version: (5.0.51a-community) running on 72.232.89.22 (www.onlinebookshop.in)
# Date: 20.07.2008 06:07:58
# DB: "onlinebo_onlinebook"
#---------------------------------------------------------
DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE `adminlogin` (
  `AD_ID` bigint(20) NOT NULL auto_increment,
  `AD_NAME` varchar(100) NOT NULL default '',
  `AD_PASSWORD` varchar(100) NOT NULL default '',
  `AD_TYPE` int(11) NOT NULL default '0',
  `AD_LASTLOGIN` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`AD_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `adminlogin`(`AD_ID`, `AD_NAME`, `AD_PASSWORD`, `AD_TYPE`, `AD_LASTLOGIN`) VALUES ('5', 'abc', 'abc', '2', '2007-06-05 15:10:17');
DROP TABLE IF EXISTS `adminsections`;
CREATE TABLE `adminsections` (
  `sec_id` bigint(20) NOT NULL auto_increment,
  `sec_name` varchar(50) NOT NULL default '',
  `sec_image` varchar(50) NOT NULL default '',
  `sec_link` varchar(50) NOT NULL default '',
  `sec_order` int(11) NOT NULL default '0',
  PRIMARY KEY  (`sec_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO `adminsections`(`sec_id`, `sec_name`, `sec_image`, `sec_link`, `sec_order`) VALUES ('1', 'Login Management', 'login.jpg', 'controlsystem.php', '1');
INSERT INTO `adminsections`(`sec_id`, `sec_name`, `sec_image`, `sec_link`, `sec_order`) VALUES ('2', 'Book Management', 'learning.jpg', 'controlsystem.php', '2');
INSERT INTO `adminsections`(`sec_id`, `sec_name`, `sec_image`, `sec_link`, `sec_order`) VALUES ('3', 'Category Management', 'research.jpg', 'controlsystem.php', '3');
INSERT INTO `adminsections`(`sec_id`, `sec_name`, `sec_image`, `sec_link`, `sec_order`) VALUES ('5', 'Author Management', 'miscellonious.jpg', 'controlsystem.php', '4');
INSERT INTO `adminsections`(`sec_id`, `sec_name`, `sec_image`, `sec_link`, `sec_order`) VALUES ('6', 'Publisher Management', 'circular.jpg', 'controlsystem.php', '5');
INSERT INTO `adminsections`(`sec_id`, `sec_name`, `sec_image`, `sec_link`, `sec_order`) VALUES ('9', 'Miscellaneous', 'tech.jpg', 'controlsystem.php', '9');
INSERT INTO `adminsections`(`sec_id`, `sec_name`, `sec_image`, `sec_link`, `sec_order`) VALUES ('8', 'News Letter Management', 'advtimg.jpg', 'controlsystem.php', '8');
INSERT INTO `adminsections`(`sec_id`, `sec_name`, `sec_image`, `sec_link`, `sec_order`) VALUES ('10', 'Currency Rate', 'us$.jpg', 'controlsystem.php', '7');
DROP TABLE IF EXISTS `authermaster`;
CREATE TABLE `authermaster` (
  `AUTH_ID` bigint(20) NOT NULL auto_increment,
  `AUTH_NAME` varchar(200) NOT NULL default '',
  `AUTH_DESC` text NOT NULL,
  PRIMARY KEY  (`AUTH_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO `authermaster`(`AUTH_ID`, `AUTH_NAME`, `AUTH_DESC`) VALUES ('1', 'Hemingway', 'DC Booksdsfsdfsd');
INSERT INTO `authermaster`(`AUTH_ID`, `AUTH_NAME`, `AUTH_DESC`) VALUES ('2', 'Boik, John', '<strong><em>We also have i</em></strong>n stock the entire set of Bare Acts that are published. Law Book  Shop is an authorized agent for government of Kerala publications and stocks all  the Govt. Publications that are available.');
INSERT INTO `authermaster`(`AUTH_ID`, `AUTH_NAME`, `AUTH_DESC`) VALUES ('3', 'Dharmendar Kanwar', 'Nil');
INSERT INTO `authermaster`(`AUTH_ID`, `AUTH_NAME`, `AUTH_DESC`) VALUES ('4', 'Kiran Desai', 'nil');
INSERT INTO `authermaster`(`AUTH_ID`, `AUTH_NAME`, `AUTH_DESC`) VALUES ('5', 'Anand', '');
INSERT INTO `authermaster`(`AUTH_ID`, `AUTH_NAME`, `AUTH_DESC`) VALUES ('6', 'Priti Singh', '');
INSERT INTO `authermaster`(`AUTH_ID`, `AUTH_NAME`, `AUTH_DESC`) VALUES ('7', 'O V Vijayan', '');
INSERT INTO `authermaster`(`AUTH_ID`, `AUTH_NAME`, `AUTH_DESC`) VALUES ('8', 'DeSouza', '');
INSERT INTO `authermaster`(`AUTH_ID`, `AUTH_NAME`, `AUTH_DESC`) VALUES ('9', 'P C MARKANDA', '');
INSERT INTO `authermaster`(`AUTH_ID`, `AUTH_NAME`, `AUTH_DESC`) VALUES ('10', 'Bryan A. Garner', '');
INSERT INTO `authermaster`(`AUTH_ID`, `AUTH_NAME`, `AUTH_DESC`) VALUES ('11', 'A.K.Bhatia', '');
INSERT INTO `authermaster`(`AUTH_ID`, `AUTH_NAME`, `AUTH_DESC`) VALUES ('12', 'Abbey & Mark Richards', '');
INSERT INTO `authermaster`(`AUTH_ID`, `AUTH_NAME`, `AUTH_DESC`) VALUES ('13', 'Abbey & Mark Richards', '');
INSERT INTO `authermaster`(`AUTH_ID`, `AUTH_NAME`, `AUTH_DESC`) VALUES ('14', 'Abbey & Mark Richards', '');
INSERT INTO `authermaster`(`AUTH_ID`, `AUTH_NAME`, `AUTH_DESC`) VALUES ('15', 'Dominic Johnson', '');
INSERT INTO `authermaster`(`AUTH_ID`, `AUTH_NAME`, `AUTH_DESC`) VALUES ('16', 'Dominic Johnson', '');
INSERT INTO `authermaster`(`AUTH_ID`, `AUTH_NAME`, `AUTH_DESC`) VALUES ('17', 'Bryan Horrigan', '');
DROP TABLE IF EXISTS `bookmaster`;
CREATE TABLE `bookmaster` (
  `BK_ID` bigint(20) NOT NULL auto_increment,
  `BK_CAT` bigint(20) default NULL,
  `BK_AUTH` varchar(100) default NULL,
  `BK_STOCK` int(11) default NULL,
  `BK_TITLE` text,
  `BK_EDITION` varchar(150) default NULL,
  `BK_PAGES` varchar(100) default NULL,
  `BK_BINDING` varchar(250) default NULL,
  `BK_CURRENCY` varchar(50) NOT NULL default '',
  `BK_PRICE` varchar(100) default NULL,
  `BK_SHOPPRICE` varchar(100) default NULL,
  `BK_PUBLISHER` bigint(20) default NULL,
  `BK_ISBNONE` varchar(100) default NULL,
  `BK_ISBNTWO` varchar(100) default NULL,
  `BK_SHIPDAY` int(11) default NULL,
  `BK_OVERSIZE` int(11) default NULL,
  `BK_DESC` longtext,
  `BK_TABLECNT` longtext,
  `BK_AUTHDETAILS` longtext,
  `BK_IMAGE` varchar(200) NOT NULL default 'noimage.jpg',
  `BK_LANSTAT` int(11) default NULL,
  `BK_FEATURED` int(11) NOT NULL default '0',
  `BK_CDATE` date default NULL,
  `BK_MDATE` date default NULL,
  PRIMARY KEY  (`BK_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('9', '60', '1', '0', 'DISCIPLINE OF LAW, THE', '2007 Reprint', '334', 'Paperback', 'Rs', '250', '225', '5', '0', '0', '7', '0', '	  THE DISCIPLINE OF LAW : LORD DENNING The underlying theme of this book is \\\'that the principles of law laid down by the Judges in the 19th century - however suited to social conditions of that time - are not suited to the social necessities and social opinion of the 20th century. They should be moulded and shaped to meet the needs and opinions of today/ The Discipline of Law is a fascinating account of Lord Denning\\\'s personal contribution to the changing face of English law in this century. It is divided into seven main parts each concentrating on one area of the law in which that change has been most marked. In speaking of the Discipline of Law, I use the word in the sense given in the Shorter Oxford Dictionary of \\\'Instruction imparted to disciples or scholars\\\'. But I have no disciples: and scholars are few. Yet I use the word so as to show that I wish to impart instruction - instruction, that is, in the principles of law as they have been, as they are, and as they should be. My theme is that the principles of law laid down by the Judges in the 19th century - however suited to social conditions of that time - are not suited to the social necessities and social opinion of the 20th century. They should be moulded and shaped to meet the needs and opinion of today. In pursuit of this theme I have taken some of the principles where progress has been most marked: and in which I myself have taken some part. Not, I hope, out of conceit, but because I happen to be well acquainted with them. I have put forward proposals which have had a mixed reception. Some of them have come to be accepted during my time. Some have been rejected. Others have not been accepted as yet. Most of them have found their way into the Law Reports. So recently I determined to collect them together in a book. I have arranged them, chapter by chapter, according to the subject in hand. I have quoted extensively from my judgments and connected them together by a running commentary in the hope that these proposals may be discussed in the Law Schools: and perhaps in future years find acceptance. But this book is outside my judicial work. All I write now must be treated with reserve.	  ', '0', '0', 'noimage.jpg', '1', '1', '2007-07-01', '2007-09-01');
INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('10', '60', '2', '0', 'THE CLOSING CHAPTER', '2007 Reprint', '294', 'Paperback', 'Rs', '250', '225', '5', '0', '0', '7', '0', 'THE CLOSING CHAPTER : LORD DENNING This is the last of Lord Denning\\\'s four books setting out the way in which he has sought to develop English law in a career spanning nearly four decades on the Bench. In this respect it completes the series of books starting with The Discipline of Law in 1979, and followed successively by The Due Process of Law and the sensational What Next in the Law. The new work contains, in Book One, a sequel to Lord Denning\\\'s autobiography, The Family Story. In it he tells with disarming and touching candour of the circumstances of the publication and withdrawal of What Next in the Law and of his decision to retire from the office of Master of the Rolls. He also tells of his activities since retirement, including his advice to householders during the water strike, and the consternation caused by the judgment in the Court of Appeal in the case of the Sikh Boy\\\'s Turban. Book Two contains a fascinating account of some of the leading contentious legal issues of the day, in which he has played a singular part. He discusses the problems of statutory interpretation and explains the legal significance of the new dichotomy between public law and private law as set out in his judgment in O\\\'Reilly v Mackman in 1982. He traces the bumpy course of trade union legislation from 1906 to the present day, and places his own, often contentious, judgments on trade union matters in the context of that legislation. Finally he identifies the series of cases on which he and the Court of Appeal have been, or have appeared to be, on a collision course with the House of Lords. He ends, however, happily enough, with Geo Mitchell Ltd v Finney Seeds Ltd, the last of his cases to go on appeal to the House of Lords, in which his judgment was, for a change, enthusiastically endorsed by the House of Lords.', '0', '0', '8131705390.jpg', '1', '1', '2007-07-01', '2007-07-15');
INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('12', '60', '2', '0', 'THE LAW OF EVIDENCE', '2006', '1740', 'Hardbound', 'Rs', '1695', '1530', '7', '0', '0', '7', '1', 'RATANLAL &amp; DHIRAJLAL LAW OF EVIDENCE 22ND Edition 2006 Enlarged edition on a wider format. Containing all notable decisions of the Supreme Court and various High Courts reported upto Jan. 2002 added in the body of the book Wider Format Enlarged edition on a wider format. Containing all notable decisions of the Supreme Court and various High Courts reported upto Jan. 2002 added in the body of the book with exhaustive notes, comments, case-law references, State Amendments etc., etc. alongwith the changes made by the Information Technology Act, 2000 incorporated at appropriate places. Ratanlal and Dhirajlal\\\'s THE LAW OF EVIDENCE is a legal classic. It is the most original, authentic dependable and brilliant work having a profound impact on its vast readership that covers judges, lawyers, police officers, administrators, law teachers and academicians, students, research scholars and in fact every one who is in any way concerned with the administration of Criminal Law and Justice in this country. The fact that it has entered into 20th edition speaks volumes about the undisputed quality and standard of this work and its undiminishing appeal to its readership which has only grown with the passage of time. While time has always beaten men and matter, this gem of a classic has literally scored over it and lives today to immortalise its authors. A good work as it is, it is the very life-blood of its authors. Revised under the Chief Editorship of the eminent jurist Hon\\\'ble Mr. Justice Y.V. Chandrachud, Former Chief Justice of India and Justice Alladi Kuppuswami in collaboration with Shri V.R. Manohar, Former Advocate-General of Maharashtra, Senior Advocate Supreme Court of India, Ex-Chairman Bar Council of Maharashtra, Chief Editor, All India Reporter, Criminal Law Journal, AIR Manual, etc. this work of the great masters will retain its freshness and appeal. The present 20th edition has been thoroughly revised and at places even re-written in the light of all statutory amendments and plethora of cases that have emerged during the last 5 years. State Amendments have been incorporated under appropriate sections in the body of the book. Almost nearing eighty-six years of its existence, since the first edition of this monumental work was published in 1916, and having practically surpassed more than a fifty thousand of circulation-mark by now, this glorious work of the celebrated authors in its present edition, will find ready and whole-hearted acceptance. In all its glory this New Edition, thoroughly revised, is now released with the fondest of all hopes that it will meet the tumultuous welcome from its vast readership.', 'General Contents Part I-Relevancy of Facts-I. Preliminary, II. Relevancy of Facts. Part II-On Proof-III. Facts which need not be proved, IV. Oral Evidence, V. Documentary Evidence, VI. Exclusion of Oral by Documentary Evidence. Part III-Production and Effect of Evidence-VII. Burden of Proof, VIII. Estoppel, IX. Witnesses, X. Of the Examination of Witnesses, XI. Improper Admission and Rejection of Evidence.', '0', '8187107618.jpg', '1', '1', '2007-07-01', '2007-07-15');
INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('46', '60', '3', '0', 'Administrative Law', '6th ed. Indian Reprint 2005', '1035', 'Paperback', 'Rs', '550', '', '5', '0', '0', '7', '1', '0', '	  	  	  <p>Table of Statutes <br />Table of European Legislation and International Treaties and Conventions <br />Chronological List of Statutes <br />Table of Cases <br />PART I <br />1. INTRODUCTION <br />Government, Law and Justice Characteristics of the Law </p> <p>2. CONSTITUTIONAL FOUNDATIONS OF THE POWERS OF THE COURTS <br />The Rule of Law The Sovereignty of Parliament Government Subject to Law The Doctrine of Ultra Vires <br />PART II AUTHORITIES AND FUNCTIONS </p> <p>3. THE CENTRAL GOVERNMENT <br />The Crown and Ministers <br />The Civil Service <br />The Law of Crown Service Some Governmental Functions Complaints against Administration</p> <p>4. LOCAL AND DEVOLVED GOVERNMENT <br />Local Administration An Historical Sketch <br />The Modern System of Local Government Complaints against Local Government Regional Development Agencies Devolution&mdash;Scotland and Wales Scotland Wales </p> <p>5. THE POLICE PART V DISCRETIONARY POWER </p> <p>6. PUBLIC CORPORATIONS, PRIVATISATION AND REGULATION Public Corporations - The Mechanisms of Privatisation - Regulation - Some Regulatory Mechanisms - Regulation and Judicial Review PART III EUROPEAN INFLUENCES </p> <p>7. INCORPORATION OF EUROPEAN LAW European Human Rights The Human Rights Act 1998 Catalogue of European Human Rights The European Union PART IV POWERS AND JURISDICTION </p> <p>8. LEGAL NATURE OF POWERS Sources of Power Express Requirements and Conditions Conclusiveness, Mistake and Fraud Power or Duty-Words Permissive or Obligatory Estoppel Waiver and Consent Res Judicata </p> <p>9. JURISDICTION OVER FACT AND LAW Error Outside Jurisdiction Error on the Face of the Record Findings, Evidence and Jurisdiction Summary of Rules </p> <p>10. PROBLEMS OF INVALIDITY Collateral Proceedings Partial Invalidity Standard and Burden of Proof Interim Effect of Disputed Orders Nullity and Relativity </p> <p>11. RETENTION OF DISCRETION Discretionary Power Delegation Surrender, Abdication, Dictation Over-rigid Policies Restriction by Contract or Grant Estoppel-Misleading Advice </p> <p>12. ABUSE OF DISCRETION Restriction of Discretion The Principle of Reasonableness Categories of Unreasonableness Mixed Motives Good Faith Subjective Language Statutory Reasonableness PART VI NATURAL JUSTICE </p> <p>13. NATURAL JUSTICE AND LEGAL JUSTICE </p> <p>14. THE RULE AGAINST BIAS Judicial and Administrative Impartiality Causes of Prejudice Effects of Prejudice </p> <p>15. THE RIGHT TO A FAIR HEARING Audi Alteram Partem Administrative Cases Statutory Hearings The Retreat from Natural Justice The Right to be Heard Reinstated Fair Hearings-General Aspects Fair Hearings-Particular Situations Exceptions PART VII REMEDIES AND LIABILITY </p> <p>16. ORDINARY REMEDIES Rights and Remedies Actions for Damages Injunctions Declarations Relator Actions Enforcement of Duties </p> <p>17. PREROGATIVE REMEDIES Remedies of Public Law Habeas Corpus Certiorari and Prohibition Mandamus </p> <p>18. BOUNDARIES OF JUDICIAL REVIEW Marginal Situations Realms Beyond the Law </p> <p>19. PROCEDURE OF JUDICIAL REVIEW Defects of Prerogative Remedies The Reforms of 1977-1981 The Divorce of Public and Private Law </p> <p>20. RESTRICTION OF REMEDIES The Old Law of Standing The New Law of Standing Discretion, Exhaustion, Implied Exclusion Protective and Preclusive Clauses Exclusive Statutory Remedies Default Powers </p> <p>21. LIABILITY OF PUBLIC AUTHORITIES Liability Under European Union Law - Liability for Breach of Human Rights Liability in Tort Generally - Negligence and Strict Liability - Breach of Duty and Misfeasance - Immunities and Time Limits - Liability in Contract - Liability to Make Restitution -Liability to Pay Compensation </p> <p>22. CROWN PROCEEDINGS - The Crown in Litigation - Liability in Tort - Liability in Contract - Remedies and Procedure - Statutes Affecting the Crown - Limitations of State Liability - Suppression of Evidence in the Public Interest PART VIII ADMINISTRATIVE LEGISLATION AND ADJUDICATION </p> <p>23. DELEGATED LEGISLATION Necessity of Delegated Legislation, Scope of Administrative Legislation, Legal Forms and Characteristics, Judicial Review Publication, Preliminary Consultation, Parliamentary Supervision </p> <p>24. STATUTORY TRIBUNALS The Tribunal System, Rights of Appeal, Problems of Tribunals. The Franks Committee, The Reforms of 1958 Reorganisation of Tribunals Procedure of Tribunals, Appeals on Questions of Law and Discretion, Table of Tribunals. </p> <p>25. STATUTORY INQUIRIES - The System of Inquiries, Complaints and Reforms, Law and Practice Today, Other Inquiry Procedures. </p> <p>APPENDIX 1 Lord Diplock\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\'s Formal Statement on Judicial Review </p> <p>APPENDIX 2 Issues arising while this book was in the press</p>	  	  	  ', '	  	  	  <p><em>Wade H.W.R &amp; Forsyth C.F <br /></em></p>	  	  	  ', 'noimage.jpg', '1', '1', '2007-08-01', '2007-10-05');
INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('56', '62', '5', '0', 'Tough Stuff - Emergency Fire Fire', '123', '123', 'Paperback', 'US$', '245', '125', '6', '12', '13', '1', '0', 'This is test&nbsp; Description', '	  	  	  This is test  Table of contents	  	  	  	  	  ', '	  	  	  This is test  Auther Details	  	  	  	  	  ', 'tough.jpg', '1', '1', '2007-10-06', '2007-10-07');
INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('47', '110', '3', '0', 'ENCYCLOPAEDIA OF FORMS & PRECEDENTS', 'Latest', '80 Vols', 'Hardbind', 'Pound', '5,588.00 GBP', '', '9', '9780406044242', '0', '21', '1', '<p>The Encyclopaedia of Forms and Precedents is the leading source of non-contentious precedents in terms of the breadth and authority of its content. It covers everything that both the specialist and non-specialist practitioner is likely to encounter, offering access to an unrivalled collection of precedents covering all aspects of non-contentious work. <br /><br />The work is both user-friendly and practical. It is fully indexed and cross-referenced and contains concise commentaries on the law, practical checklists and procedural tables. The contributors are leading authorities in their fields - solicitors, barristers, and academics from leading institutions. It is comprehensive, containing complete precedents, alternative clauses and official forms, together with ancillary documentation (model letters, etc) to provide the reader with useful supporting information. <br /><br />The work is also flexible, adapting to changes in law and practice with the addition of new titles on a regular basis. <br /><br />The Encyclopaedia of Forms and Precedents currently comprises a set of 80+ volumes, an annual Consolidated Index, a Consolidated Table of Cases and Statutory Materials, Form Finder (soft covers) and regular looseleaf updating. Efficient looseleaf servicing, covering all relevant developments in both law and practice, means this source of precedents is always regularly updated. Volumes are also revised and reissued on a regular basis and these are charged separately on publication. <br /><br />The Encyclopaedia is also available on CD-ROM and online, bringing all the benefits of electronic delivery such as enhanced search facilities and hypertext links and making all the information in the Encyclopaedia readily accessible. <br /><br /></p>', '0', 'Editor-in-chief: The Rt Hon Lord Millett, PC, a Lord of Appeal in Ordinary. Managing Editor: Robert Walker, BA, Solicitor', 'noimage.jpg', '1', '1', '2007-08-23', '2007-08-23');
INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('48', '62', '4', '0', 'test', '0', '0', 'Paperback', 'Rs', '0', '', '6', '0', '0', '0', '0', '	  	  	  	  	  	  ', '<p>sdfsdfsd</p>', '<p>sdfsdfsdf</p>', '067008123X.jpg', '1', '0', '2007-09-05', '2007-09-08');
INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('49', '62', '1', '0', 'fdgfdg', '0', '0', 'Paperback', 'Rs', '0', '', '6', '0', '0', '0', '0', '	  	  ', '0', '0', 'Building1.jpg', '1', '1', '2007-09-05', '');
INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('50', '62', '2', '0', 'abc', '0', '0', 'Paperback', 'Rs', '200', '250', '6', '0', '0', '0', '0', '0', '0 ', '0 ', '8172236530.jpg', '1', '1', '2007-09-05', '2007-09-15');
INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('51', '62', '3', '0', 'Accounting Standards', '12', '15', 'Paperback', 'Rs', '359', '200', '6', '13', '13', '1', '0', 'Invites young readers to sound the siren as Jos e and his fire engine battle a blaze at the airport. On board pages.', '	  Invites young readers to sound the siren as Jos e and his fire engine battle a blaze at the airport. On board pages.', 'Invites young readers to sound the siren as Jos e and his fire engine battle a blaze at the airport. On board pages.  	  	  	  	  	  ', '0099468190.jpg', '1', '1', '2007-09-05', '2007-10-06');
INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('52', '62', '3', '0', 'abab', '0', '0', 'Paperback', 'Rs', '0', '', '6', '0', '0', '0', '0', '	  	  ', '0', '0', 'noimage.jpg', '1', '1', '2007-09-05', '');
INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('53', '62', '4', '0', 'Abcd', '12', '213', 'Paperback', 'Rs', '123', '', '6', '342', '23', '2', '1', '<p><em>Wobbly Bits</em> is the essential guide to polite conversation. <strong>Covering everything from the politically incorrect to the seriously taboo, this humorous book offers over 3,000 ways to avoid speaking your mind!</strong> </p>
<p>Keep this book as your secret weapon (that &lsquo;distinguished, cosmetically different person of size&rsquo; your friend keeps mentioning might just not be your ideal date!), and you&rsquo;ll never be caught out again!</p>
<p>Subjects covered include crime, sins, sex, the body and its parts, clothing and nakedness, bodily functions and secretions, illness and injury, old age and death, work, poverty, government and politics, warfare and race.</p>
<p>Wobbly Bits is the essential guide to polite conversation. Covering everything from the politically incorrect to the seriously taboo, this humorous book offers over 3,000 ways to avoid speaking your mind! <br />Keep this book as your secret weapon (that &lsquo;distinguished, cosmetically different person of size&rsquo; your friend keeps mentioning might just not be your ideal date!), and you&rsquo;ll never be caught out again!<br />Subjects covered include crime, sins, sex, the body and its parts, clothing and nakedness, bodily functions and secretions, illness and injury, old age and death, work, poverty, government and politics, warfare and race.<br /></p>', 'gfsdfsdfsd dxbfdfg ', '<em>sdfsdf dfgdf</em> ', '067008123X.jpg', '1', '0', '2007-09-08', '2007-09-24');
INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('54', '93', '5', '0', 'Encyclopaedia of Information Technology Law', '2007', '5 Books', 'Hardbind', '$', '55.00', '55.00', '6', '8175345993', '9788175345997', '7', '1', '<p>Description <br />&nbsp; Book 1<br />DATA PROTECTION LAW<br />2nd Ed. by David Bainbridge<br />328 pages, Hardbound.<br />Data Protection cases in 2004 have developed the law in unexpected ways. David Bainbridge brings his classic text up to date with full reference to a huge range of materials. He brings his considerable experience as a writer and practitioner lecturer on these matters to produce a work that explains the context and implications of these important changes, whilst at the same time offering the substantive materials for further reference.<br />&bull;&nbsp;&nbsp;&nbsp; Data Protection: the approach of the 1984 Act and the Directive and its approach<br />&bull;&nbsp;&nbsp;&nbsp; Outline of the Data Protection Act<br />&bull;&nbsp;&nbsp;&nbsp; Definitions and Principles<br />&bull;&nbsp;&nbsp;&nbsp; Notification<br />&bull;&nbsp;&nbsp;&nbsp; Constraints on Processing<br />&bull;&nbsp;&nbsp;&nbsp; Data Subjects\\\\\\\' Rights<br />&bull;&nbsp;&nbsp;&nbsp; Enforcement, Offences<br />&bull;&nbsp;&nbsp;&nbsp; Exemptions<br />&bull;&nbsp;&nbsp;&nbsp; Privacy in Telecommunications<br />&bull;&nbsp;&nbsp;&nbsp; The Commissioner and the Tribunal<br />Full of checklists andflowcharts and other useful tools, it will prove invaluable to advisers and data users alike. Far more than just annotated legislation, it will have a wide sale to business and their professional advisers.</p><p>Book 2<br />SOFTWARE LICENSING<br />2nd Ed. by David Bainbridge<br />255 pages, Hardbound.</p><p>&quot;Strongly recommended&quot; Computer Law</p><p>&quot;Highly readable, full of help and advice.&quot; Computing<br />vendor and purchaser are the legal arrangements that control their relationship. David Bainbridge provides expert advice and guidance on the drafting of licence agreements. The emphasis is on how licensing agreements work in practice, how they are negotiated and what occurs in the event of dispute-Contents include:</p><p>&bull;Copyright law and computer programs<br />&bull;Industrial property rights<br />&laquo;Liability for defective software<br />&raquo;Software licences<br />&raquo;&nbsp;&nbsp;&nbsp; Software procurement<br />&bull;&nbsp;&nbsp;&nbsp; Negotiations<br />&bull;&nbsp;&nbsp;&nbsp; Sample licence agreements.<br />Key new developments that impact on licensing such as the City ofSt AUxtns v ICL case and the Millenium Bug are treated comprehensively. David Bainbridge\\\\\\\'s practical advice will be invaluable for lawyers or other intellectual property advisers, or companies negotiating licences.</p><p>&nbsp;</p><p>Book 3<br />LAW FOR I.T. PROFESSIONALS<br />by Paul Bernnan</p><p>Book 4<br />E-MAIL, THE INTERNET AND THE LAW<br />by Tim Kevan &amp; Paul McGrath</p><p>Book 5<br />NETWORK COMMUNICATIONS<br />by Stephen Mason</p><p>Book 6<br />LEGAL PROTECTION OF SOFTWARE<br />by Richard Morgan &amp; Kit Burden<br />&nbsp;</p><p>Data Protection cases in 2004 have developed the law in unexpected ways. David Bainbridge brings his classic text up to date with full reference to a huge range of materials. He brings his considerable experience as a writer and practitioner lecturer on these matters to produce a work that explains the context and implications of these important changes, whilst at the same time offering the substantive materials for further reference.</p><p>&bull;&nbsp;&nbsp;&nbsp; Data Protection: the approach of the 1984 Act and the Directive<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; and its approach</p><p>&bull;&nbsp;&nbsp;&nbsp; Outline of the Data Protection Act</p><p>&bull;&nbsp;&nbsp;&nbsp; Definitions and Principles</p><p>&bull;&nbsp;&nbsp;&nbsp; Notification</p><p>&bull;&nbsp;&nbsp;&nbsp; Constraints on Processing</p><p>&bull;&nbsp;&nbsp;&nbsp; Data Subjects\\\\\\\' Rights</p><p>&bull;&nbsp;&nbsp;&nbsp; Enforcement, Offences</p><p>&bull;&nbsp;&nbsp;&nbsp; Exemptions</p><p>&bull;&nbsp;&nbsp;&nbsp; Privacy in Telecommunications</p><p>&bull;&nbsp;&nbsp;&nbsp; The Commissioner and the Tribunal</p><p>Full of checklists andflowcharts and other useful tools, it will prove invaluable to advisers and data users alike. Far more than just annotated legislation, it will have a wide sale to business and their professional advisers.<br />&nbsp;<br />&nbsp; Table Of Contents <br />&nbsp; Book 1<br />DATA PROTECTION LAW<br />2nd Ed. by David Bainbridge</p><p>Table of Cases Table of Legislation Preface</p><p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Introduction and Background</p><p>Development of data protection law in the United Kingdom</p><p>Other areas of law protecting personal data</p><p>Summary</p><p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The Data Protection Directive</p><p>Introduction</p><p>General approach to data protection set out in the Directive</p><p>General provisions</p><p>General rules on the lawfulness of processing</p><p>Judicial remedies, liabilities and sanctions</p><p>Transfers to third countries</p><p>Codes of conduct</p><p>Supervisory authorities and the Working Party</p><p>Community implementing measures and final provisions</p><p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Outline of the Data Protection Act 1998</p><p>Introduction</p><p>Mechanism of Data Protection under the 1998 Act</p><p>Some perspectives on the Act</p><p>The data controller</p><p>The data subject</p><p>The data processor</p><p>Third parties Summary of changes brought in by the Data Protection Act 1998</p><p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The Definitions</p><p>Basic definitions Data Relevant filing system</p><p>Accessible records</p><p>Personal data</p><p>Sensitive personal data</p><p>Processing</p><p>Processing for the special purposes</p><p>Actors (persons affected)</p><p>Application of Act</p><p>Definitions relevant to the transitional provisions</p><p>5.&nbsp;&nbsp;&nbsp;&nbsp; The Data Protection Principles</p><p>The Data Protection Principles Interpretation of the Principles</p><p>First Principle</p><p>Second Principle</p><p>Third Principle</p><p>Fourth Principle</p><p>Fifth Principle</p><p>Sixth Principle</p><p>Seventh Principle</p><p>Eighth Principle Summary</p><p>6.&nbsp;&nbsp;&nbsp;&nbsp; Notification</p><p>Notification</p><p>Duty to notify changes The Register</p><p>Exemptions from notification Assessable processing Data Protection Supervisors Duty to make information available Notification Regulations and the Commissioner</p><p>7.&nbsp;&nbsp;&nbsp;&nbsp; Constraints on Processing</p><p>Conditions for processing</p><p>Non-sensitive personal data and Schedule 2</p><p>Sensitive data and Schedule 3</p><p>Further conditions for processing sensitive personal data Transfers to third countries</p><p>8.&nbsp;&nbsp;&nbsp;&nbsp; Rights of Data Subjects</p><p>Introduction Transparency</p><p>Providing information to data subjects Disproportionate effort Subject access</p><p>Subject access where another individual would be identified Credit reference</p><p>&nbsp;</p><p>Enforced subject access Subject access fees Control over processing activity</p><p>Right to prevent processing likely to cause substantial</p><p>damage or substantial distress Impact on the laws of defamation and passing off Right to prevent processing for direct marketing Rights in relation to automated decision-taking Requirements for individuals\\\\\\\' consent Compensation</p><p>Rights in relation to inaccurate data, etc. Jurisdiction and procedure</p><p>9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Exemptions and Transitional Provisions</p><p>Exemptions</p><p>National security</p><p>Crime and taxation</p><p>Health, education and social work</p><p>Health</p><p>Education</p><p>Social work Regulatory activity</p><p>Special purposes - journalism, literature and art Research, history and statistics Manual data held by public authorities Information available to the public Disclosures required by law etc, Domestic purposes Schedule 7 exemptions</p><p>Confidential references</p><p>Armed forces</p><p>Judicial appointments and honours</p><p>Crown employment etc</p><p>Management forecasts</p><p>Corporate finance</p><p>Negotiations</p><p>Examination marks</p><p>Examination scripts</p><p>Legal professional privilege</p><p>Self-incrimination</p><p>Miscellaneous subject access exemptions The Transitional Provisions Introduction The first transitional period</p><p>Manual data</p><p>Eligible automated data - general exemption Eligible automated data - particular exemptions</p><p>The second transitional period</p><p>Processing for historical research (partial derogation)</p><p>Assessable processing</p><p>Enforcement and Criminal Offences</p><p>Introduction System of notices</p><p>Enforcement notice</p><p>Information notice</p><p>Special information notice</p><p>Processing for the special purposes - restrictions on notices anc determinations</p><p>Appeals</p><p>Requests for assessment Offences</p><p>Offences related to notification</p><p>Offences related to notices served by the Commissioner</p><p>Obtaining, disclosing, procuring and selling offences</p><p>Obstructing or failing to give assistance in respect of overseas information systems</p><p>Enforced subject access</p><p>Miscellaneous offences</p><p>Liability of employees, senior officers etc.</p><p>Mode of trial and penalties Powers of entry and inspection Forfeiture, etc.</p><p>The Information Commissioner and the Information Tribunal</p><p>Introduction</p><p>The Information Commissioner</p><p>The office of Information Commissioner Functions of the Information Commissioner Good practice and compliance Dissemination of information Codes of practice Dissemination of Community findings in relation to transfc</p><p>third countries</p><p>Assessing processing with consent of data controllers Laying reports and codes of practice before each House of</p><p>Parliament Assisting individuals where processing is for the special</p><p>purposes International co-operation</p><p>Co-operation under the Data Protection Convention</p><p>Co-operation with the European Commission and other supervisory authorities</p><p>Co-operation in relation to transfers to third countries</p><p>Other potential functions Power to inspect overseas information systems Information provided to the Commissioner or Tribunal The Information Tribunal Constitution Jurisdiction Procedure</p><p>Notice of appeal and reply by Commissioner</p><p>Amendment, application for striking out, withdrawal and consolidation</p><p>Directions and inspection</p><p>Power to determine without a hearing</p><p>The hearing</p><p>Determination and costs Procedure - national security</p><p>Constitution and general duty of the Tribunal</p><p>Bringing appeal, acknowledgement and reply</p><p>Pre-h earing</p><p>The hearing</p><p>12.&nbsp;&nbsp; The First Report of the Commission on the Impiementatii of the Data Protection Directive</p><p>Introduction</p><p>No amendment of the Directive</p><p>On-line survey</p><p>Main findings in the Report</p><p>General disparities in implementation</p><p>Applicable law</p><p>Transfers to third countries</p><p>Sound and image data Summary and conclusions</p><p>13.&nbsp;&nbsp;&nbsp; Processing Personal Data and the Community Institutions</p><p>Introduction</p><p>Definitions and scope</p><p>Principles relating to data quality</p><p>Lawfulness of processing and special categories of data</p><p>Informing data subjects of their rights</p><p>Confidentiality of processing</p><p>Data protection officers</p><p>Transfers of personal data</p><p>TYansfers within or between Community institutions or bodies Transfers to recipients subject to the Directive Transfers to recipients not subject to the Directive Remaining provisions</p><p>14.&nbsp;&nbsp;&nbsp; Privacy in Electronic Communications</p><p>Introduction</p><p>Relationship with the Data Protection Directive and Data Protectic</p><p>Act 1998</p><p>Security and confidentiality Traffic data and itemised billing Calling or connected line identification Location data Malicious or nuisance calls Emergency calls Automatic call forwarding Directories of subscribers Automated calling systems Direct marketing purposes Exemptions Compensation etc. Other provisions</p><p>Appendix 1</p><p><br />Book 2<br />SOFTWARE LICENSING<br />2nd Ed. by David Bainbridge<br />255 pages, Hardbound.<br />Preface Table of Cases Table of Legislation List of Figures and Tables <br />1&nbsp;&nbsp; Introduction</p><p>2&nbsp;&nbsp; Copyright and Computer Software</p><p>3&nbsp;&nbsp; Industrial Property Rights in Computer Software</p><p>4&nbsp;&nbsp; The Legal Environment of Software Licensing</p><p>5&nbsp;&nbsp; Liability for Defective Software</p><p>6&nbsp;&nbsp; Drafting Software Contracts</p><p>7&nbsp;&nbsp; Licences for Off-the-shelf Software</p><p>8&nbsp;&nbsp; Issues in Software Procurement</p><p>9&nbsp;&nbsp; Negotiating Software Agreements</p><p>10&nbsp;&nbsp; Facilities Management</p><p>Appendix 1: Example Licence Agreement for Bespoke Software</p><p>Appendix 2: Example Licence Agreement for Off-the-shelf Software</p><p>Bibliography</p><p>Glossary</p><p>Index<br />&nbsp;</p>', '<p>Description <br />&nbsp; Book 1<br />DATA PROTECTION LAW<br />2nd Ed. by David Bainbridge<br />328 pages, Hardbound.<br />Data Protection cases in 2004 have developed the law in unexpected ways. David Bainbridge brings his classic text up to date with full reference to a huge range of materials. He brings his considerable experience as a writer and practitioner lecturer on these matters to produce a work that explains the context and implications of these important changes, whilst at the same time offering the substantive materials for further reference.<br />&bull;&nbsp;&nbsp;&nbsp; Data Protection: the approach of the 1984 Act and the Directive and its approach<br />&bull;&nbsp;&nbsp;&nbsp; Outline of the Data Protection Act<br />&bull;&nbsp;&nbsp;&nbsp; Definitions and Principles<br />&bull;&nbsp;&nbsp;&nbsp; Notification<br />&bull;&nbsp;&nbsp;&nbsp; Constraints on Processing<br />&bull;&nbsp;&nbsp;&nbsp; Data Subjects\\\\\\\' Rights<br />&bull;&nbsp;&nbsp;&nbsp; Enforcement, Offences<br />&bull;&nbsp;&nbsp;&nbsp; Exemptions<br />&bull;&nbsp;&nbsp;&nbsp; Privacy in Telecommunications<br />&bull;&nbsp;&nbsp;&nbsp; The Commissioner and the Tribunal<br />Full of checklists andflowcharts and other useful tools, it will prove invaluable to advisers and data users alike. Far more than just annotated legislation, it will have a wide sale to business and their professional advisers.</p><p>Book 2<br />SOFTWARE LICENSING<br />2nd Ed. by David Bainbridge<br />255 pages, Hardbound.</p><p>&quot;Strongly recommended&quot; Computer Law</p><p>&quot;Highly readable, full of help and advice.&quot; Computing<br />vendor and purchaser are the legal arrangements that control their relationship. David Bainbridge provides expert advice and guidance on the drafting of licence agreements. The emphasis is on how licensing agreements work in practice, how they are negotiated and what occurs in the event of dispute-Contents include:</p><p>&bull;Copyright law and computer programs<br />&bull;Industrial property rights<br />&laquo;Liability for defective software<br />&raquo;Software licences<br />&raquo;&nbsp;&nbsp;&nbsp; Software procurement<br />&bull;&nbsp;&nbsp;&nbsp; Negotiations<br />&bull;&nbsp;&nbsp;&nbsp; Sample licence agreements.<br />Key new developments that impact on licensing such as the City ofSt AUxtns v ICL case and the Millenium Bug are treated comprehensively. David Bainbridge\\\\\\\'s practical advice will be invaluable for lawyers or other intellectual property advisers, or companies negotiating licences.</p><p>&nbsp;</p><p>Book 3<br />LAW FOR I.T. PROFESSIONALS<br />by Paul Bernnan</p><p>Book 4<br />E-MAIL, THE INTERNET AND THE LAW<br />by Tim Kevan &amp; Paul McGrath</p><p>Book 5<br />NETWORK COMMUNICATIONS<br />by Stephen Mason</p><p>Book 6<br />LEGAL PROTECTION OF SOFTWARE<br />by Richard Morgan &amp; Kit Burden<br />&nbsp;</p><p>Data Protection cases in 2004 have developed the law in unexpected ways. David Bainbridge brings his classic text up to date with full reference to a huge range of materials. He brings his considerable experience as a writer and practitioner lecturer on these matters to produce a work that explains the context and implications of these important changes, whilst at the same time offering the substantive materials for further reference.</p><p>&bull;&nbsp;&nbsp;&nbsp; Data Protection: the approach of the 1984 Act and the Directive<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; and its approach</p><p>&bull;&nbsp;&nbsp;&nbsp; Outline of the Data Protection Act</p><p>&bull;&nbsp;&nbsp;&nbsp; Definitions and Principles</p><p>&bull;&nbsp;&nbsp;&nbsp; Notification</p><p>&bull;&nbsp;&nbsp;&nbsp; Constraints on Processing</p><p>&bull;&nbsp;&nbsp;&nbsp; Data Subjects\\\\\\\' Rights</p><p>&bull;&nbsp;&nbsp;&nbsp; Enforcement, Offences</p><p>&bull;&nbsp;&nbsp;&nbsp; Exemptions</p><p>&bull;&nbsp;&nbsp;&nbsp; Privacy in Telecommunications</p><p>&bull;&nbsp;&nbsp;&nbsp; The Commissioner and the Tribunal</p><p>Full of checklists andflowcharts and other useful tools, it will prove invaluable to advisers and data users alike. Far more than just annotated legislation, it will have a wide sale to business and their professional advisers.<br />&nbsp;<br />&nbsp; Table Of Contents <br />&nbsp; Book 1<br />DATA PROTECTION LAW<br />2nd Ed. by David Bainbridge</p><p>Table of Cases Table of Legislation Preface</p><p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Introduction and Background</p><p>Development of data protection law in the United Kingdom</p><p>Other areas of law protecting personal data</p><p>Summary</p><p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The Data Protection Directive</p><p>Introduction</p><p>General approach to data protection set out in the Directive</p><p>General provisions</p><p>General rules on the lawfulness of processing</p><p>Judicial remedies, liabilities and sanctions</p><p>Transfers to third countries</p><p>Codes of conduct</p><p>Supervisory authorities and the Working Party</p><p>Community implementing measures and final provisions</p><p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Outline of the Data Protection Act 1998</p><p>Introduction</p><p>Mechanism of Data Protection under the 1998 Act</p><p>Some perspectives on the Act</p><p>The data controller</p><p>The data subject</p><p>The data processor</p><p>Third parties Summary of changes brought in by the Data Protection Act 1998</p><p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The Definitions</p><p>Basic definitions Data Relevant filing system</p><p>Accessible records</p><p>Personal data</p><p>Sensitive personal data</p><p>Processing</p><p>Processing for the special purposes</p><p>Actors (persons affected)</p><p>Application of Act</p><p>Definitions relevant to the transitional provisions</p><p>5.&nbsp;&nbsp;&nbsp;&nbsp; The Data Protection Principles</p><p>The Data Protection Principles Interpretation of the Principles</p><p>First Principle</p><p>Second Principle</p><p>Third Principle</p><p>Fourth Principle</p><p>Fifth Principle</p><p>Sixth Principle</p><p>Seventh Principle</p><p>Eighth Principle Summary</p><p>6.&nbsp;&nbsp;&nbsp;&nbsp; Notification</p><p>Notification</p><p>Duty to notify changes The Register</p><p>Exemptions from notification Assessable processing Data Protection Supervisors Duty to make information available Notification Regulations and the Commissioner</p><p>7.&nbsp;&nbsp;&nbsp;&nbsp; Constraints on Processing</p><p>Conditions for processing</p><p>Non-sensitive personal data and Schedule 2</p><p>Sensitive data and Schedule 3</p><p>Further conditions for processing sensitive personal data Transfers to third countries</p><p>8.&nbsp;&nbsp;&nbsp;&nbsp; Rights of Data Subjects</p><p>Introduction Transparency</p><p>Providing information to data subjects Disproportionate effort Subject access</p><p>Subject access where another individual would be identified Credit reference</p><p>&nbsp;</p><p>Enforced subject access Subject access fees Control over processing activity</p><p>Right to prevent processing likely to cause substantial</p><p>damage or substantial distress Impact on the laws of defamation and passing off Right to prevent processing for direct marketing Rights in relation to automated decision-taking Requirements for individuals\\\\\\\' consent Compensation</p><p>Rights in relation to inaccurate data, etc. Jurisdiction and procedure</p><p>9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Exemptions and Transitional Provisions</p><p>Exemptions</p><p>National security</p><p>Crime and taxation</p><p>Health, education and social work</p><p>Health</p><p>Education</p><p>Social work Regulatory activity</p><p>Special purposes - journalism, literature and art Research, history and statistics Manual data held by public authorities Information available to the public Disclosures required by law etc, Domestic purposes Schedule 7 exemptions</p><p>Confidential references</p><p>Armed forces</p><p>Judicial appointments and honours</p><p>Crown employment etc</p><p>Management forecasts</p><p>Corporate finance</p><p>Negotiations</p><p>Examination marks</p><p>Examination scripts</p><p>Legal professional privilege</p><p>Self-incrimination</p><p>Miscellaneous subject access exemptions The Transitional Provisions Introduction The first transitional period</p><p>Manual data</p><p>Eligible automated data - general exemption Eligible automated data - particular exemptions</p><p>The second transitional period</p><p>Processing for historical research (partial derogation)</p><p>Assessable processing</p><p>Enforcement and Criminal Offences</p><p>Introduction System of notices</p><p>Enforcement notice</p><p>Information notice</p><p>Special information notice</p><p>Processing for the special purposes - restrictions on notices anc determinations</p><p>Appeals</p><p>Requests for assessment Offences</p><p>Offences related to notification</p><p>Offences related to notices served by the Commissioner</p><p>Obtaining, disclosing, procuring and selling offences</p><p>Obstructing or failing to give assistance in respect of overseas information systems</p><p>Enforced subject access</p><p>Miscellaneous offences</p><p>Liability of employees, senior officers etc.</p><p>Mode of trial and penalties Powers of entry and inspection Forfeiture, etc.</p><p>The Information Commissioner and the Information Tribunal</p><p>Introduction</p><p>The Information Commissioner</p><p>The office of Information Commissioner Functions of the Information Commissioner Good practice and compliance Dissemination of information Codes of practice Dissemination of Community findings in relation to transfc</p><p>third countries</p><p>Assessing processing with consent of data controllers Laying reports and codes of practice before each House of</p><p>Parliament Assisting individuals where processing is for the special</p><p>purposes International co-operation</p><p>Co-operation under the Data Protection Convention</p><p>Co-operation with the European Commission and other supervisory authorities</p><p>Co-operation in relation to transfers to third countries</p><p>Other potential functions Power to inspect overseas information systems Information provided to the Commissioner or Tribunal The Information Tribunal Constitution Jurisdiction Procedure</p><p>Notice of appeal and reply by Commissioner</p><p>Amendment, application for striking out, withdrawal and consolidation</p><p>Directions and inspection</p><p>Power to determine without a hearing</p><p>The hearing</p><p>Determination and costs Procedure - national security</p><p>Constitution and general duty of the Tribunal</p><p>Bringing appeal, acknowledgement and reply</p><p>Pre-h earing</p><p>The hearing</p><p>12.&nbsp;&nbsp; The First Report of the Commission on the Impiementatii of the Data Protection Directive</p><p>Introduction</p><p>No amendment of the Directive</p><p>On-line survey</p><p>Main findings in the Report</p><p>General disparities in implementation</p><p>Applicable law</p><p>Transfers to third countries</p><p>Sound and image data Summary and conclusions</p><p>13.&nbsp;&nbsp;&nbsp; Processing Personal Data and the Community Institutions</p><p>Introduction</p><p>Definitions and scope</p><p>Principles relating to data quality</p><p>Lawfulness of processing and special categories of data</p><p>Informing data subjects of their rights</p><p>Confidentiality of processing</p><p>Data protection officers</p><p>Transfers of personal data</p><p>TYansfers within or between Community institutions or bodies Transfers to recipients subject to the Directive Transfers to recipients not subject to the Directive Remaining provisions</p><p>14.&nbsp;&nbsp;&nbsp; Privacy in Electronic Communications</p><p>Introduction</p><p>Relationship with the Data Protection Directive and Data Protectic</p><p>Act 1998</p><p>Security and confidentiality Traffic data and itemised billing Calling or connected line identification Location data Malicious or nuisance calls Emergency calls Automatic call forwarding Directories of subscribers Automated calling systems Direct marketing purposes Exemptions Compensation etc. Other provisions</p><p>Appendix 1</p><p><br />Book 2<br />SOFTWARE LICENSING<br />2nd Ed. by David Bainbridge<br />255 pages, Hardbound.<br />Preface Table of Cases Table of Legislation List of Figures and Tables <br />1&nbsp;&nbsp; Introduction</p><p>2&nbsp;&nbsp; Copyright and Computer Software</p><p>3&nbsp;&nbsp; Industrial Property Rights in Computer Software</p><p>4&nbsp;&nbsp; The Legal Environment of Software Licensing</p><p>5&nbsp;&nbsp; Liability for Defective Software</p><p>6&nbsp;&nbsp; Drafting Software Contracts</p><p>7&nbsp;&nbsp; Licences for Off-the-shelf Software</p><p>8&nbsp;&nbsp; Issues in Software Procurement</p><p>9&nbsp;&nbsp; Negotiating Software Agreements</p><p>10&nbsp;&nbsp; Facilities Management</p><p>Appendix 1: Example Licence Agreement for Bespoke Software</p><p>Appendix 2: Example Licence Agreement for Off-the-shelf Software</p><p>Bibliography</p><p>Glossary</p><p>Index<br />&nbsp;</p>', '0 ', 'noimage.jpg', '1', '1', '2007-09-08', '2007-09-09');
INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('15', '57', '6', '0', 'FASHION - From concept to consumer', '7e, Indian Reprint 2005', '412', 'Paperback', 'Rs', '350.00', '350.00', '8', '9788129709264', '8129709260', '14', '0', '<p><font style=\\\"BACKGROUND-COLOR: #ffffff\\\" size=\\\"5\\\"><strong>Fashion </strong></font></p>
<p>From concept to consumer <br />Seventh Edition <br />Gini Stephens Frings <br />LOOK WHAT\\\'S NEW! <br />New and updated information in all four parts and 55 new photos: <br />FASHION FUNDAMENTALS <br />m Changing U.S. demographics <br />&bull; New developments in globalization <br />&bull; Latest technological advances in garment and textile production, fashion business communications, E- commerce, database marketing, and merchandise information systems <br />&bull; New resources for color and design <br />&bull; New information on fashion forecasting and market research <br />&bull; Updates on fashion services, web sites, and publications <br />TEXTILES <br />m Newest fiber development including PLAcorn fiber <br />&bull; Trends in textile product development, production, and marketing <br />&bull; Performance fabrics, digital printing, and new finishes <br />&bull; New statistics and technical information <br />&bull; New marketing strategies <br />&bull; Garment packages <br />&bull; New information on types of trims, threads, and elastics <br />MANUFACTURING <br />Newest information on designers and international fashion centers <br />New information on product development, merchandising, and scheduling <br />Product data management systems <br />Update on global sourcing and imports <br />Mass customization <br />Accessory designers and brands add apparel lines <br />Accessories involvement with E-commerce and licensing <br />New information on accessory product development and marketing <br />New information on trade shows, updates on locations and timing of markets <br />Runway vs. showroom <br />Virtual showrooms <br />Manufacturer/retailer relationships and automatic replenishment <br />RETAILING <br />New Information on categories, store ownership, and organization <br />Retailing involvement in E-commerce <br />Global expansion <br />Newest buying strategies and procedures <br /><br /><br /><br /><br />National brands vs. private label <br />New retail marketing focus</p>', '<p>Foreword 19 Preface 21 Acknowledgments 23 <br /><br />Part One <br /><br />The Fundamentals of Fashion <br /><br />1 <br /><br />Fashion Development 27 <br /><br />FRANCE, THE CENTER OF FASHION 28 Fashion Dictated by Royalty 28 Hand Sewing by Dressmakers and Tailors 28 Growth of the Couture 29 <br /><br />EFFECTS OF THE INDUSTRIAL REVOLUTION ON FASHION 30 Growth of the Textile Industry 30 Growth of the Middle Class 30 Establishment of the Business Suit 30 <br /><br />MASS PRODUCTION OF CLOTHING 31 Invention of the Sewing Machine 31 Women\\\'s Fashion Reflects Social Changes 32 Mass Production of Women\\\'s Separates 32 Children\\\'s Fashion 33 <br /><br />RETAILING DURING THE NINETEENTH CENTURY 33 The First Department Stores 34 Early Mail-Order Merchandising 35 <br /><br />CHANGES CAUSED BY COMMUNICATIONS, LEISURE, AND INDUSTRY 35 <br /><br />The First Fashion Magazines 35 <br /><br />Growth of Leisure Activities 36 <br /><br />Conditions in the Garment Industry 36 <br /><br />EFFECTS OF WORLD WAR I ON THE STATUS OF WOMEN AND FASHION 37 <br /><br />Women in the Workforce 37 <br /><br />Important Trendsetting Designers 38 <br /></p>', 'Gini Stephens Frings', 'noimage.jpg', '1', '1', '2007-07-21', '2007-07-28');
INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('55', '55', '6', '0', 'The Islands And Tribes Of Andaman And Nicobar', '1', '124', 'Paperback', 'Rs', '25', '25', '6', '123', '0', '2', '0', 'In the course of the twentieth century, there occurred a development unique in the story of hummankind. States that had defined themselves from Thucydides to Bismarck by their claims to sovereign independence gradually came together to create international organization to promote peace, curb aggression, regulate diplomatic affarirs, devise an international organizations to promote peace, curb aggression, regulate diplomatic affairs, devise an international code of law, encourage social development, and foster prosperity The emergence was not straighforward. It involved many setbacks and aroused much resistance from those who felt their power and privileges threatened by such a trend For every voice favouring global cooperation there was another, warning against the erosion of national sovereignty', '	  In the course of the twentieth century, there occurred a development unique in the story of hummankind. States that had defined themselves from Thucydides to Bismarck by their claims to sovereign independence gradually came together to create international organization to promote peace, curb aggression, regulate diplomatic affarirs, devise an international organizations to promote peace, curb aggression, regulate diplomatic affairs, devise an international code of law, encourage social development, and foster prosperity The emergence was not straighforward. It involved many setbacks and aroused much resistance from those who felt their power and privileges threatened by such a trend For every voice favouring global cooperation there was another, warning against the erosion of national sovereignty. 	  	  	  	  	  	  ', '	  In the course of the twentieth century, there occurred a development unique in the story of hummankind. States that had defined themselves from Thucydides to Bismarck by their claims to sovereign independence gradually came together to create international organization to promote peace, curb aggression, regulate diplomatic affarirs, devise an international organizations to promote peace, curb aggression, regulate diplomatic affairs, devise an international code of law, encourage social development, and foster prosperity The emergence was not straighforward. It involved many setbacks and aroused much resistance from those who felt their power and privileges threatened by such a trend For every voice favouring global cooperation there was another, warning against the erosion of national sovereignty.  	  	  	  	  ', 'andaman.jpg', '1', '1', '2007-10-05', '2007-10-10');
INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('57', '84', '8', '0', 'Conveyancing with CD', '13th Edn.', '1448', 'Hardbound', 'US$', '10', '', '6', '0', '81-7177-170-X', '7', '0', '<p class=\\\"MsoNormal\\\" style=\\\"MARGIN: 0in 0in 0pt\\\"><font face=\\\"Verdana\\\" size=\\\"2\\\">Drafting of deeds and documents founded upon contractual relationship of parties and yet circumscribed by legal and statutory provisions is both a science and an art. Hence the importance of the traditional system of having written conveyances and other instruments providing textual focus with appropriate delineation of specific rights and obligations of the panics involved as correctly borne out by this revised, enlarged and utility-oriented work, DeSouza\\\'s Conveyancing, maintaining the hallmark of its standard of excellence and unalloyed reputation of being the only book of its kind for the last six decades.<br />Multidimensional and expertly compiled, this outstanding work is replete with adequate explanations and guidelines on law against each topic focusing the recent decisions of the Supreme Court and of the different High Courts followed by model forms and precedents shorn of verbosity and ambiguity.<br /></font></p>', '	  	  ', '	  	  ', 'DeSouza\'s-Conveyancing.jpg', '1', '0', '2007-10-11', '');
INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('58', '68', '9', '0', 'BUILDING & ENGINEERING CONTRACTS LAW AND PRACTICE', '2nd Edn. 2007', '1910', 'Paperback', 'US$', '45.00', '', '13', '0', '0', '7', '0', 'Markanda&rsquo;s Building &amp; Engineering Contracts is a model of clarity and practically. It is a practitioner&rsquo;s book for the busy practitioner, it is a definitive guide for the busy Lawyers and all those concerned on handling and resolving construction disputes providing a comprehensive coverage of litigation, arbitration, ADR and adjudication. The work examines procedure in meticulous detail, and includes an unrivalled selection of prccedencs, both for inclusion in the contracts and for use during the proccedings. - An Opinion pauses verbis <br />', 'GENERAL CONTENTS
Table of Cases
Subject Index
CHAPTER
CHAPTER 1	GENERAL PRINCIPLES OF CONTRACT

CHAPTER 2	CONTRACTS WITH GOVERNMENT

CHAPTER 3	WORDS AND PHRASES OCCURRING IN BUILDING CONTRACTS

CHAPTER 4	TENDER

CHAPTER 5	ARCHITECTS, ENGINEERS AND QUANTITY SURVEYORS

CHAPTER 6	CONSTRUCTION OF CONTRACTS
CHAPTER 7	SUB-CONTRACTS
CHAPTER 8	PERFORMANCE OF CONTRACT
CHAPTER 9	TIME WHETHER ESSENCE OF CONTRACT
CHAPTER 10	EXTENSION OF TIME
CHAPTER 11   	EXTRAS, VARIATIONS, ALTERATIONS, ADDITIONS AND OMISSIONS
CHAPTER 12	APPROVAL AND CERTIFICATES
CHAPTER 13	PRICE AND PAYMENT
CHAPTER 14	QUANTUM MERUIT
CHAPTER 15	DEFECTS
CHAPTER 16	FRUSTRATION OF CONTRACT
CHAPTER 17	NOVATION OF CONTRACT
CHAPTER 18	WAIVER AND ESTOPPEL
CHAPTER 19	BREACH OF CONTRACT
CHAPTER 20   	FORFEITURE, DETERMINATION AND VESTING OF MATERIALS
CHAPTER 21	LIQUIDATED DAMAGES
CHAPTER 22	INTERPRETATION OF ENGINEERING CLAUSES
CHAPTER 23	BLACKLISTING
CHAPTER 24  	ARBITRATION (UNDER THE ARBITRATION AND CONCILIATION ACT, 1996)
CHAPTER 25   	BANK GUARANTEE

APPENDICES
APPENDIX 1 	THE ARBITRATION AND CONCILIATION ACT, 1996 
APPENDIX 2 	THE INTEREST ACT, 1978
APPENDIX 3	GENERAL CONDITIONS OF CONTRACT FOR CENTRAL PUBLIC WORKS DEPARTMENTS [CPWD]
APPENDIX 4 	MILITARY ENGINEERING SERVICES [MES] -GENERAL CONDITIONS OF CONTRACTS
APPENDIX 5 	PUBLIC WORKS DEPARTMENT [PWD] -GENERAL CONDITIONS OF CONTRACT
APPENDIX 6	FIDIC CONDITIONS OF CONTRACT FOR WORKS OF CIVIL ENGINEERING CONSTRUCTION WITH ALL UPDATED AMENDMENTS
APPENDIX 7   	THE INDIAN CONTRACT ACT, 1872 

Subject Index

', '	  	  	  	  ', 'Building-&-Engineering-Cont.jpg', '1', '1', '2007-10-15', '2007-10-15');
INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('59', '61', '10', '0', 'The winning Brief', '2nd Edn. Indian Print', '516', 'Paperback', 'Pound', '11.00', '', '14', '0-19-568444-3', '978-0-19-568444-5', '7', '0', '<font face=\\\"Verdana\\\">Does a good writing style help persuade judges? Bryan Garner makes a convincing case that it does. And he should know; in recent years, he has worked with judges al! over the country to help them improve their writing of judicial opinions. He has polled judges both formally and informally to learn their preferences. And with his &quot;deep issue&quot; technique, he has even helped shape their preferences.<br />This book is a revised and updated compendium of Garner\\\'s 100 most important tips on brief-writing. Some are major points (see #8) and some are minor ones (see #65). But each one matters because collectively they add up to the most compelling, orderly, and visually appealing brief that an advocate can present.<br />Style, of course, is more than just &quot;spit and polish&quot;; it is intertwined with the very way that an advocate gets the merits of a case across to a judge. In Garner\\\'s view, good writing is good thinking&mdash;made plain on paper.<br />Each tip begins with a set of quotable quotes&mdash;some of the most insightful comments that experts have ever made on persuasive writing. Then, Garner elaborates on the tip, usually with before-and-after examples. The book also showcases several full-length model briefs.<br />Although some of the advice might look standard, even the most seasoned advocate will be surprised by how much there is to learn about good brief-writing. In fact, many of the tips debunk cherished orthodoxies,<br />Garner says that by and large, lawyers don\\\'t understand their judicial readers. He has listened again and again to judges say,&quot; If I had only known in the old days what I know now that I\\\'m a judge. I could have been a much more effective advocate.&quot; His point is a powerful one: you shouldn\\\'t have to become a judge to learn about effective persuasion,<br />This book is an original and lively resource on the issues that continually trouble brief-writers. It was developed for the famous CLE program by the same name, which is presented every year in locations throughout the United States. If you\\\'re writing to win a case, The Winning Briefshouldn\\\'t be on your bookshelf&mdash;it should be open on yourdesk.<br />BRYAN A. GARNER is the president of Law Prose, Inc., a Dallas-based company specializing in legal-writing workshops. He teaches and publishes extensively on legal language, contractual drafting, and brief-writing. His books with Oxford include The Elements of Legal Style, A Dictionary of Modern Legal Usage, and, most recently, Gamer\\\'s Modem American Usage. He is also the author of Guidelines for Drafting and Editing Court Ru/esand serves as editor in chief of Black\\\'s Law Dictionary.<br />Praise for The Winning Brief<br />&quot; This is, quite simply, one of the best books on legal writing available today. It is an eminently practical, occasionally inspired guide that should help all lawywers&mdash;whether they are mediocre or brilliant writers&mdash;to become clearer and more persuasive on paper.&quot;<br />&mdash; Lawyers Weekly USA<br />&quot;This is a great book for any appellate practitioner who wishes to get better. Mr. Garner demonstrates admirably the brevity and clarity that he teaches. This book reflects great learning.Yet it is highly practical. We can speak no higher praise.&quot;<br />&mdash;ABA Appellate Practice Journal &quot; A terrific reference. The Winning Brief will occupy a prominent place on my bookshelf.&quot;<br />&mdash; Jurist<br /></font>', '	  	  A.    COMPOSING IN AN ORDERLY, SENSIBLE WAY
	1    Plan every writing project by breaking it up—and carry it out in stages.
	2   When first working on a writing project, let the madman run loose for a while.
	3    Begin the architectural planning by stating the issues. Before writing in earnest, figure out how many issues there are—and what they are.
	4    Once you\\\'ve drafted issue statements, read more law and take plenty of notes. Tweak or even rewrite the issues as you continue researching. Then organize the issues from most important to least important.
	5	Outline your brief, but start with nonlinear outlining.
	6	Write a draft straight through, without stopping to edit. Let it sit awhile before editing.
	7	Proof carefully; have several others proof carefully; learn and use standard editing marks.
	B.    CONVEYING THE BIG PICTURE
	8    Frame the deep issues at the outset so that you meet the 90-second test.
	9   Phrase your issues in separate sentences. Don\\\'t start with whether or any other interrogative word.
	10    Limit your issues to 75 words apiece.
	11   Write fair but persuasive issues that have only one answer. Cast each issue as a syllogism. If you have several issues, give each one with a concise, neutral heading.
	12   Weave facts into your issues to make them concrete.
	13    If you don\\\'t open with explicit issue statements, sum up the issues and your theme in a short introduction.
	14   Highlight the reasons for the conclusion you\\\'re urging.
	15   Make your points as simple as possible, but no simpler.
C.    MARCHING FORWARD THROUGH SOUND PARAGRAPHS
	16    Begin a paragraph with a topic sentence. Don\\\'t end the preceding paragraph with what should be the next paragraph\\\'s topic sentence.
	17	Bridge from one paragraph to another.
	18	Connect your sentences smoothly to one another. Avoid \\\"bumps\\\" in the prose.
	19	Ease your readers\\\' way by providing signposts.
	20	Break up long, complex sentences. Shoot for an average sentence length of 20 words.
	21	Avoid tiresome repetitions that hurt the mind\\\'s ear.
	22    Put all your citations in footnotes, while saying in the text what authority you\\\'re relying on. But ban substantive footnotes.
	23   If you must cite in text, make the citations unobtrusive.
	24   Say something about the critical cases you cite: show how and why they apply. For other cases, be satisfied with a simple citation.
	25    Use parenthetical case explanations merely to show why you\\\'re citing the cases—not to
present your argument.
EDITING FOR BRISK, UNCLUTTERED SENTENCES
	26	Relax the tone: eliminate the jargon known as \\\"legalese.\\\"
	27	Avoid overparticulari/ation.
	28	Populate your sentences. Use real names (not procedural labels) for parties.
	29	Work hard to replace foe-verbs with action verbs.
	30	Know what the passive voice is, and minimize it.
	31	Uncover buried verbs—especially words ending in -lion.
	32    When given the choice between a passive-voice verb and a buried verb, choose the passive voice.
	33   Eliminate unnecessary prepositional phrases—especially those beginning with of.
	34    Don\\\'t separate a short subject from its verb with a modifying phrase. Instead, start, the sentence with the modifier.
	35	Don\\\'t separate a verb from its object.
	36	To write forcefully, end your sentences with punch.
	37	Cut filler phrases such as there is and there are.
	38	Eliminate throat-clearing phrases.
	39	Ruthlessly cut unnecessary words.
	40    Keep your sentences to one main thought, but combine related sentences if doing so will minimi/e choppiness.
	41    Use parallel constructions whenever you can—but make sure the ideas are really parallel.
CHOOSING THE BEST WORDS
	42	Replace humdrum phrases with snappy ones that spark interest.
	43	Slate your ideas freshly; use cliches only when you can turn them to good advantage.
	44	Strive for distinctive nouns and verbs—minimi/ing adjectives and adverbs.
	45    Save syllables. Shoot for one-syllable words when possible; failing thai, aim for two-syllable words.
	46    Avoid heavy connectors.
	47    Simplify wordy prepositions: \\\\vith respect to, as to, in order to, in connection with, etc.
	48    Don\\\'t use However to start a sentence: use But instead, move however inside the sentence, or collapse the preceding sentence into an Although-<:\\\\ause.
	49    Strike pursuant to Irom your vocabulary.
	50    Use that reslriclively, which nonrestrictively.

', '	  	  ', 'The-winning-Brief.jpg', '1', '1', '2007-10-18', '');
INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('60', '61', '10', '0', 'The winning Brief', '2nd Edn. 2007', '516', 'Paperback', 'US$', '23.00', '', '14', '0195684443', '9780195684445', '7', '0', '<p><font face=\\\"Verdana\\\" size=\\\"2\\\">Does a good writing style help persuade judges? Bryan Garner makes a convincing case that it does. And he should know; in recent years, he has worked with judges al! over the country to help them improve their writing of judicial opinions. He has polled judges both formally and informally to learn their preferences. And with his &quot;deep issue&quot; technique, he has even helped shape their preferences. </font></p>
<p><font face=\\\"Verdana\\\" size=\\\"2\\\">This book is a revised and updated compendium of Garner\\\'s 100 most important tips on brief-writing. Some are major points (see #8) and some are minor ones (see #65). But each one matters because collectively they add up to the most compelling, orderly, and visually appealing brief that an advocate can present.</font></p>
<p><font face=\\\"Verdana\\\" size=\\\"2\\\">Style, of course, is more than just &quot;spit and polish&quot;; it is intertwined with the very way that an advocate gets the merits of a case across to a judge. In Garner\\\'s view, good writing is good thinking&mdash;made plain on paper.</font></p>
<p><font face=\\\"Verdana\\\" size=\\\"2\\\">Each tip begins with a set of quotable quotes&mdash;some of the most insightful comments that experts have ever made on persuasive writing. Then, Garner elaborates on the tip, usually with before-and-after examples. The book also showcases several full-length model briefs.</font></p>
<p><font face=\\\"Verdana\\\" size=\\\"2\\\">Although some of the advice might look standard, even the most seasoned advocate will be surprised by how much there is to learn about good brief-writing. In fact, many of the tips debunk cherished orthodoxies,</font></p>
<p><font face=\\\"Verdana\\\" size=\\\"2\\\">Garner says that by and large, lawyers don\\\'t understand their judicial readers. He has listened again and again to judges say,&quot; If I had only known in the old days what I know now that I\\\'m a judge. I could have been a much more effective advocate.&quot; His point is a powerful one: you shouldn\\\'t have to become a judge to learn about effective persuasion,</font></p>
<p><font face=\\\"Verdana\\\" size=\\\"2\\\">This book is an original and lively resource on the issues that continually trouble brief-writers. It was developed for the famous CLE program by the same name, which is presented every year in locations throughout the United States. If you\\\'re writing to win a case, The Winning Briefshouldn\\\'t be on your bookshelf&mdash;it should be open on yourdesk.</font></p>
<p><font face=\\\"Verdana\\\" size=\\\"2\\\">BRYAN A. GARNER is the president of Law Prose, Inc., a Dallas-based company specializing in legal-writing workshops. He teaches and publishes extensively on legal language, contractual drafting, and brief-writing. His books with Oxford include The Elements of Legal Style, A Dictionary of Modern Legal Usage, and, most recently, Gamer\\\'s Modem American Usage. He is also the author of Guidelines for Drafting and Editing Court Ruesand serves as editor in chief of Black\\\'s Law Dictionary.</font></p>
<p><font face=\\\"Verdana\\\" size=\\\"2\\\">Praise for The Winning Brief<br />&quot; This is, quite simply, one of the best books on legal writing available today. It is an eminently practical, occasionally inspired guide that should help all lawywers&mdash;whether they are mediocre or brilliant writers&mdash;to become clearer and more persuasive on paper.&quot;<br />&mdash; Lawyers Weekly USA<br />&quot;This is a great book for any appellate practitioner who wishes to get better. Mr. Garner demonstrates admirably the brevity and clarity that he teaches. This book reflects great learning.Yet it is highly practical. We can speak no higher praise.&quot;<br />&mdash;ABA Appellate Practice Journal &quot; A terrific reference. The Winning Brief will occupy a prominent place on my bookshelf.&quot;<br />&mdash; Jurist</font></p>', '	  	  	  	  Does a good writing style help persuade judges? Bryan Garner makes a convincing case that it does. And he should know; in recent years, he has worked with judges al! over the country to help them improve their writing of judicial opinions. He has polled judges both formally and informally to learn their preferences. And with his \\\"deep issue\\\" technique, he has even helped shape their preferences. 

This book is a revised and updated compendium of Garner\\\'s 100 most important tips on brief-writing. Some are major points (see #8) and some are minor ones (see #65). But each one matters because collectively they add up to the most compelling, orderly, and visually appealing brief that an advocate can present.

Style, of course, is more than just \\\"spit and polish\\\"; it is intertwined with the very way that an advocate gets the merits of a case across to a judge. In Garner\\\'s view, good writing is good thinking—made plain on paper.

Each tip begins with a set of quotable quotes—some of the most insightful comments that experts have ever made on persuasive writing. Then, Garner elaborates on the tip, usually with before-and-after examples. The book also showcases several full-length model briefs.

Although some of the advice might look standard, even the most seasoned advocate will be surprised by how much there is to learn about good brief-writing. In fact, many of the tips debunk cherished orthodoxies,

Garner says that by and large, lawyers don\\\'t understand their judicial readers. He has listened again and again to judges say,\\\" If I had only known in the old days what I know now that I\\\'m a judge. I could have been a much more effective advocate.\\\" His point is a powerful one: you shouldn\\\'t have to become a judge to learn about effective persuasion,

This book is an original and lively resource on the issues that continually trouble brief-writers. It was developed for the famous CLE program by the same name, which is presented every year in locations throughout the United States. If you\\\'re writing to win a case, The Winning Briefshouldn\\\'t be on your bookshelf—it should be open on yourdesk.

BRYAN A. GARNER is the president of Law Prose, Inc., a Dallas-based company specializing in legal-writing workshops. He teaches and publishes extensively on legal language, contractual drafting, and brief-writing. His books with Oxford include The Elements of Legal Style, A Dictionary of Modern Legal Usage, and, most recently, Gamer\\\'s Modem American Usage. He is also the author of Guidelines for Drafting and Editing Court Ruesand serves as editor in chief of Black\\\'s Law Dictionary.

Praise for The Winning Brief
\\\" This is, quite simply, one of the best books on legal writing available today. It is an eminently practical, occasionally inspired guide that should help all lawywers—whether they are mediocre or brilliant writers—to become clearer and more persuasive on paper.\\\"
— Lawyers Weekly USA
\\\"This is a great book for any appellate practitioner who wishes to get better. Mr. Garner demonstrates admirably the brevity and clarity that he teaches. This book reflects great learning.Yet it is highly practical. We can speak no higher praise.\\\"
—ABA Appellate Practice Journal \\\" A terrific reference. The Winning Brief will occupy a prominent place on my bookshelf.\\\"
— Jurist', '	  	  	Does a good writing style help persuade judges? Bryan Garner makes a convincing case that it does. And he should know; in recent years, he has worked with judges al! over the country to help them improve their writing of judicial opinions. He has polled judges both formally and informally to learn their preferences. And with his \\\"deep issue\\\" technique, he has even helped shape their preferences. 

This book is a revised and updated compendium of Garner\\\'s 100 most important tips on brief-writing. Some are major points (see #8) and some are minor ones (see #65). But each one matters because collectively they add up to the most compelling, orderly, and visually appealing brief that an advocate can present.

Style, of course, is more than just \\\"spit and polish\\\"; it is intertwined with the very way that an advocate gets the merits of a case across to a judge. In Garner\\\'s view, good writing is good thinking—made plain on paper.

Each tip begins with a set of quotable quotes—some of the most insightful comments that experts have ever made on persuasive writing. Then, Garner elaborates on the tip, usually with before-and-after examples. The book also showcases several full-length model briefs.

Although some of the advice might look standard, even the most seasoned advocate will be surprised by how much there is to learn about good brief-writing. In fact, many of the tips debunk cherished orthodoxies,

Garner says that by and large, lawyers don\\\'t understand their judicial readers. He has listened again and again to judges say,\\\" If I had only known in the old days what I know now that I\\\'m a judge. I could have been a much more effective advocate.\\\" His point is a powerful one: you shouldn\\\'t have to become a judge to learn about effective persuasion,

This book is an original and lively resource on the issues that continually trouble brief-writers. It was developed for the famous CLE program by the same name, which is presented every year in locations throughout the United States. If you\\\'re writing to win a case, The Winning Briefshouldn\\\'t be on your bookshelf—it should be open on yourdesk.

BRYAN A. GARNER is the president of Law Prose, Inc., a Dallas-based company specializing in legal-writing workshops. He teaches and publishes extensively on legal language, contractual drafting, and brief-writing. His books with Oxford include The Elements of Legal Style, A Dictionary of Modern Legal Usage, and, most recently, Gamer\\\'s Modem American Usage. He is also the author of Guidelines for Drafting and Editing Court Ruesand serves as editor in chief of Black\\\'s Law Dictionary.

Praise for The Winning Brief
\\\" This is, quite simply, one of the best books on legal writing available today. It is an eminently practical, occasionally inspired guide that should help all lawywers—whether they are mediocre or brilliant writers—to become clearer and more persuasive on paper.\\\"
— Lawyers Weekly USA
\\\"This is a great book for any appellate practitioner who wishes to get better. Mr. Garner demonstrates admirably the brevity and clarity that he teaches. This book reflects great learning.Yet it is highly practical. We can speak no higher praise.\\\"
—ABA Appellate Practice Journal \\\" A terrific reference. The Winning Brief will occupy a prominent place on my bookshelf.\\\"
— Jurist  	  ', 'The-winning-Brief.jpg', '1', '1', '2007-10-20', '2007-10-20');
INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('61', '121', '11', '1', 'The Business of Tourism :Concepts and Strategies', '2006', '0', 'Paperback', 'Rs', '80', '', '15', '9788120731189', '8120731182', '7', '0', '<p><font face=\\\"Verdana\\\">Travel and tourism is one of the world&rsquo;s most important and fastest growing economic sectors, generating jobs and substantial wealth for economies <br />around the globe. The present book The Business of Tourism &ndash; Concepts and Strategies explains the complex tourism phenomenon in its various <br />manifestations. Various academic disciplines are involved in the study of tourism because of the complex nature of the subject. Some basic <br />disciplines such as economics, psychology, sociology and geography contribute a great deal to the understanding of the subject. Newer disciplines <br />like marketing and management, special interest tourism, travel legislation and business travel have been introduced in this volume. The book gives <br />the reader a global perspective of the travel and tourism industry. The approach has been to provide a simple and comprehensive outline of as many <br />concepts as possible. The book contains some additional features which will be of great help to the reader. These features include case studies <br />having references to the subject matter discussed in various chapters. The cases are taken from the industry and provide interesting material for <br />interactive discussion. <br />Contents <br />&bull; Acknowledgements <br />&bull; Preface <br />&bull; Travel Trade Abbreviations <br />&bull; Tourism-A Historical Perspective <br />&bull; Consumer Behaviour and Tourism Demand <br />&bull; Dimensions of Tourism <br />&bull; Measuring The Demand For Tourism <br />&bull; The Structure of Tourism Industry <br />&bull; The Tourism Industry And Public Sector Organisation` <br />&bull; Special Interest Tourism <br />&bull; International Cooperation In Tourism <br />&bull; Travel And Accommodation <br />&bull; Travel And Transport <br />&bull; Retail Travel Trade <br />&bull; Travel Legislation <br />&bull; Business Tourism <br />&bull; Marketing and Promotion for Tourism <br />&bull; Tourism Planning And Environment <br />&bull; Glossary Travel and Tourism <br />&bull; Ticketing And Airlines Terms <br />&bull; Hotel Industry Terms <br />&bull; Travel Trade Publications <br />&bull; International Tourism Periodicals <br />&bull; Travel Industry Journals And Periodicals <br />&bull; Travel Research Journals <br />&bull; Education and Training in Travel and Tourism Institutes <br />&bull; International Organisations <br />&bull; Travel Related Publications of International Organisations <br />&bull; Bibliography <br />&bull; Index <br />&bull; CASE STUDIES <br /></font></p>', '	  	  	  <p>Travel and tourism is one of the world&rsquo;s most important and fastest growing economic sectors, generating jobs and substantial wealth for economies around the globe. The present book The Business of Tourism &ndash; Concepts and Strategies explains the complex tourism phenomenon in its various manifestations. Various academic disciplines are involved in the study of tourism because of the complex nature of the subject. Some basic disciplines such as economics, psychology, sociology and geography contribute a great deal to the understanding of the subject. Newer disciplines like marketing and management, special interest tourism, travel legislation and business travel have been introduced in this volume. The book gives the reader a global perspective of the travel and tourism industry. The approach has been to provide a simple and comprehensive outline of as many concepts as possible. The book contains some additional features which will be of great help to the reader. These features include case studies having references to the subject matter discussed in various chapters. The cases are taken from the industry and provide interesting material for interactive discussion.<br />Contents<br />&bull; Acknowledgements <br />&bull; Preface <br />&bull; Travel Trade Abbreviations <br />&bull; Tourism-A Historical Perspective <br />&bull; Consumer Behaviour and Tourism Demand <br />&bull; Dimensions of Tourism <br />&bull; Measuring The Demand For Tourism <br />&bull; The Structure of Tourism Industry <br />&bull; The Tourism Industry And Public Sector Organisation` <br />&bull; Special Interest Tourism <br />&bull; International Cooperation In Tourism <br />&bull; Travel And Accommodation <br />&bull; Travel And Transport <br />&bull; Retail Travel Trade <br />&bull; Travel Legislation <br />&bull; Business Tourism <br />&bull; Marketing and Promotion for Tourism <br />&bull; Tourism Planning And Environment <br />&bull; Glossary Travel and Tourism <br />&bull; Ticketing And Airlines Terms <br />&bull; Hotel Industry Terms <br />&bull; Travel Trade Publications <br />&bull; International Tourism Periodicals <br />&bull; Travel Industry Journals And Periodicals <br />&bull; Travel Research Journals <br />&bull; Education and Training in Travel and Tourism Institutes <br />&bull; International Organisations <br />&bull; Travel Related Publications of International Organisations <br />&bull; Bibliography <br />&bull; Index <br />&bull; CASE STUDIES</p>	  	  	  ', '	  	  	  A. K. Bhatia was a senior official in the Ministry of Tourism Government of India, for more than two decades. As Deputy Director General, he was responsible for the marketing of Indian tourism in different parts of the world and as field officer he has had several assignments in the India&rsquo;s overseas tourist offices at Brussels, Paris and Geneva. He represented the Ministry of Tourism at various international conferences.<br />After obtaining a postgraduate degree from the University of Delhi, he acquired advanced Postgraduate Diploma in Tourism Marketing from the University of Viterbo, Italy. He has a number of articles to his credit, both in International and Indian journals.<br />Presently Mr. Bhatia is working as Director of Education, Kuoni Academy of Travel. He had earlier co-ordinated and taught Tourism Management to postgraduate students at Delhi University for several years. He has also been associated with the Indian Institute of Travel and Tourism Management, Ministry of Tourism and several other institutes imparting training in travel and tourism management.	  	  	  ', 'thmb_8120731875.jpg', '1', '1', '2007-10-22', '2007-11-18');
INSERT INTO `bookmaster`(`BK_ID`, `BK_CAT`, `BK_AUTH`, `BK_STOCK`, `BK_TITLE`, `BK_EDITION`, `BK_PAGES`, `BK_BINDING`, `BK_CURRENCY`, `BK_PRICE`, `BK_SHOPPRICE`, `BK_PUBLISHER`, `BK_ISBNONE`, `BK_ISBNTWO`, `BK_SHIPDAY`, `BK_OVERSIZE`, `BK_DESC`, `BK_TABLECNT`, `BK_AUTHDETAILS`, `BK_IMAGE`, `BK_LANSTAT`, `BK_FEATURED`, `BK_CDATE`, `BK_MDATE`) VALUES ('62', '55', '17', '0', 'Adventures in Law & Justice', '1st Indian R/p 2005', '376', 'Paperback', 'Rs', '325', '', '16', '9788175344297', '81-7534-429-6', '7', '0', '<p>\\\'Adventures in Lawand Justice will quickly move to the &quot;must read&quot; list .. .Whether he set out to be iconoclastic or not, Bryan Horrigan has produced the kind of accessible read that turns on its head the notion that law professors are only good at<br />communicating with their peers.\\\' Maxine McKew</p>
<p>In this wide - ranging exploration of both news worthy and timeless dilemmas in law and justice, Professor Bryan Horrigan traces the connections between law, society, and our everyday lives. Vividly illustrated with Australian and international examples, this travel book for the mind unlocks the mysteries of law and justice and makes them accessible to everyone. It dispels many misconceptions surrounding our legal and constitutional systems, and delves into major law and justice questions that affect us all. Written for readers interested in public affairs and current events, as well as those grappling with \\\'big picture\\\' issues in law and government as students, professionals, or concerned citizens, this book serves as an introduction, a critique, and a thought-provoking ride, all in one.<br /></p>', '	  <p>PART I    OUR HERITAGE<br />1 Justice, Society, and Us<br />2 Myths, Fictions, and Realities<br />3 Truth, Justice, and the Australian Way<br />4 Life, Death, and Humanity<br />5 Love, Sex, and Gender<br />6 Black, White, and Shades of Grey<br />7 Rights, Wrongs, and Relativities<br />8 Democracy, Freedoms, and Terrorism<br />9 Here, Now, and Beyond</p><p> Index</p>	  ', '	  BRYAN HORRIGAN completed a doctorate in law at Oxford University as a Rhodes Scholar, and has consulted extensively to governments and business on a range of legal and policy issues. He is a law professor at the University of Canberra, where he is also Director of the National Centre for Corporate Law and Policy Research and Deputy Director of the National Institute for Governance. He is a regular media commentator on landmark legal developments, and has published widely in a range of legal journals and books as well as national newspapers.	  ', 'q.php', '1', '1', '2007-12-03', '2008-06-28');
DROP TABLE IF EXISTS `categorymaster`;
CREATE TABLE `categorymaster` (
  `CAT_ID` bigint(20) NOT NULL auto_increment,
  `SEC_ID` bigint(20) NOT NULL default '0',
  `CAT_NAME` varchar(200) NOT NULL default '',
  `CAT_PARENT` bigint(20) NOT NULL default '0',
  PRIMARY KEY  (`CAT_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=122 DEFAULT CHARSET=latin1;

INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('33', '9', 'Business & Management', '0');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('114', '11', 'Self-Help Books', '0');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('63', '0', 'Affidavit', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('36', '9', 'Computers & Internet', '0');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('104', '11', 'Fiction', '0');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('58', '0', 'Arbitration & Conciliation / Alternate Dispute Resolution (ADR)', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('55', '0', 'General / Introduction', '36');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('53', '9', 'Law', '0');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('62', '0', 'Accounting Standards', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('61', '0', 'Advocacy', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('60', '0', 'Administrative Law', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('54', '0', 'Drafting / Legal Drafting', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('115', '9', 'John Wiley\'s Books', '0');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('67', '0', 'Banking Law', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('68', '0', 'Building & Engineering Contracts', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('110', '0', 'Forms & Precedents', '109');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('71', '0', 'Civil Procedure Code (C.P.C)', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('72', '0', 'Company Law', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('73', '0', 'Computers / Internet / E-Commerce', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('75', '0', 'Constitution', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('76', '0', 'Contracts', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('77', '0', 'Copyright', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('78', '0', 'Criminal Law', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('79', '0', 'Criminal Procedure Code (Cr. P.C)', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('80', '0', 'Criminology', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('81', '0', 'Cross Examination', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('83', '0', 'Damages', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('84', '0', 'Deeds / Drafting', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('109', '9', 'LAW - Major works, Multi Volume Books & Journals', '0');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('113', '9', 'Medical', '0');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('87', '0', 'Writs', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('107', '0', 'Internet Law', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('91', '0', 'Torts', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('92', '0', 'Petroleum Laws', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('93', '0', 'Information Technology', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('94', '0', 'Human Rights', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('106', '0', 'Telecommunications Law', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('112', '0', 'Advocacy', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('97', '0', 'Insurance', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('98', '0', 'International Law', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('99', '0', 'Interpretation of Statutes', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('100', '0', 'Jurisprudence', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('101', '0', 'Limitation', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('102', '0', 'Power of Attorney', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('103', '0', 'Specific Relief', '53');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('105', '8', 'Novel', '0');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('116', '11', 'History', '0');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('117', '11', 'Non-Fiction', '0');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('118', '11', 'Health, Mind & Body', '0');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('119', '11', 'Religion, Spirituality & Philosophy', '0');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('120', '11', 'Travel & Tourism', '0');
INSERT INTO `categorymaster`(`CAT_ID`, `SEC_ID`, `CAT_NAME`, `CAT_PARENT`) VALUES ('121', '0', 'Tourism', '120');
DROP TABLE IF EXISTS `categorysection`;
CREATE TABLE `categorysection` (
  `catsec_id` bigint(20) NOT NULL auto_increment,
  `catsec_name` varchar(200) NOT NULL default '',
  `catsec_order` bigint(20) NOT NULL default '0',
  PRIMARY KEY  (`catsec_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO `categorysection`(`catsec_id`, `catsec_name`, `catsec_order`) VALUES ('8', ' MALAYALAM BOOKS', '3');
INSERT INTO `categorysection`(`catsec_id`, `catsec_name`, `catsec_order`) VALUES ('9', ' PROFESSIONAL & TECHNICAL', '1');
INSERT INTO `categorysection`(`catsec_id`, `catsec_name`, `catsec_order`) VALUES ('11', 'OTHERS', '2');
DROP TABLE IF EXISTS `countrymaster`;
CREATE TABLE `countrymaster` (
  `cnt_id` bigint(20) NOT NULL auto_increment,
  `cnt_name` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`cnt_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `countrymaster`(`cnt_id`, `cnt_name`) VALUES ('1', 'India');
INSERT INTO `countrymaster`(`cnt_id`, `cnt_name`) VALUES ('2', 'Sri Lanka');
INSERT INTO `countrymaster`(`cnt_id`, `cnt_name`) VALUES ('3', 'Qatar');
INSERT INTO `countrymaster`(`cnt_id`, `cnt_name`) VALUES ('4', 'United Arab Emirates');
INSERT INTO `countrymaster`(`cnt_id`, `cnt_name`) VALUES ('5', 'Oman');
DROP TABLE IF EXISTS `currencyrate`;
CREATE TABLE `currencyrate` (
  `cur_id` bigint(20) NOT NULL auto_increment,
  `cur_rupeerate` float NOT NULL default '0',
  `cur_eurorate` float NOT NULL default '0',
  PRIMARY KEY  (`cur_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `currencyrate`(`cur_id`, `cur_rupeerate`, `cur_eurorate`) VALUES ('1', '39', '12');
DROP TABLE IF EXISTS `loginprivileges`;
CREATE TABLE `loginprivileges` (
  `pri_id` bigint(20) NOT NULL auto_increment,
  `pri_admid` int(10) NOT NULL default '0',
  `pri_section` varchar(100) NOT NULL default '0',
  `pri_crt_by` bigint(20) NOT NULL default '0',
  `pri_crt_date` date NOT NULL default '0000-00-00',
  `pri_md_date` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`pri_id`)
) ENGINE=MyISAM AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

INSERT INTO `loginprivileges`(`pri_id`, `pri_admid`, `pri_section`, `pri_crt_by`, `pri_crt_date`, `pri_md_date`) VALUES ('63', '4', '1', '1', '2007-05-12', '2007-05-12');
INSERT INTO `loginprivileges`(`pri_id`, `pri_admid`, `pri_section`, `pri_crt_by`, `pri_crt_date`, `pri_md_date`) VALUES ('64', '4', '2', '1', '2007-05-12', '2007-05-12');
INSERT INTO `loginprivileges`(`pri_id`, `pri_admid`, `pri_section`, `pri_crt_by`, `pri_crt_date`, `pri_md_date`) VALUES ('96', '5', '8', '1', '2007-11-18', '2007-11-18');
INSERT INTO `loginprivileges`(`pri_id`, `pri_admid`, `pri_section`, `pri_crt_by`, `pri_crt_date`, `pri_md_date`) VALUES ('95', '5', '9', '1', '2007-11-18', '2007-11-18');
INSERT INTO `loginprivileges`(`pri_id`, `pri_admid`, `pri_section`, `pri_crt_by`, `pri_crt_date`, `pri_md_date`) VALUES ('94', '5', '6', '1', '2007-11-18', '2007-11-18');
INSERT INTO `loginprivileges`(`pri_id`, `pri_admid`, `pri_section`, `pri_crt_by`, `pri_crt_date`, `pri_md_date`) VALUES ('93', '5', '5', '1', '2007-11-18', '2007-11-18');
INSERT INTO `loginprivileges`(`pri_id`, `pri_admid`, `pri_section`, `pri_crt_by`, `pri_crt_date`, `pri_md_date`) VALUES ('92', '5', '3', '1', '2007-11-18', '2007-11-18');
INSERT INTO `loginprivileges`(`pri_id`, `pri_admid`, `pri_section`, `pri_crt_by`, `pri_crt_date`, `pri_md_date`) VALUES ('91', '5', '2', '1', '2007-11-18', '2007-11-18');
INSERT INTO `loginprivileges`(`pri_id`, `pri_admid`, `pri_section`, `pri_crt_by`, `pri_crt_date`, `pri_md_date`) VALUES ('90', '5', '1', '1', '2007-11-18', '2007-11-18');
INSERT INTO `loginprivileges`(`pri_id`, `pri_admid`, `pri_section`, `pri_crt_by`, `pri_crt_date`, `pri_md_date`) VALUES ('97', '5', '10', '1', '2007-11-18', '2007-11-18');
DROP TABLE IF EXISTS `miscsections`;
CREATE TABLE `miscsections` (
  `misc_id` bigint(20) NOT NULL auto_increment,
  `misc_cat` bigint(20) NOT NULL default '0',
  `misc_content` longtext NOT NULL,
  PRIMARY KEY  (`misc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `miscsections`(`misc_id`, `misc_cat`, `misc_content`) VALUES ('1', '1', '<p><font color=\\\"#cc0000\\\"><strong><font size=\\\"2\\\">Warm welcome to </font></strong><font size=\\\"2\\\"><em><strong>onlinebookshop.in<br /></strong></em>Online Bookshop is&nbsp;the e-commerce trade division of Law Book Shop. In fact Law Book Shop&nbsp;is an offshoot of Law Books Centre which was established way back in the year 1975. Since then we continued to be one of the </font></font><font size=\\\"2\\\">are one of the leading book shops in Southern India dealing with legal and allied publications. A spacious showroom displays almost all the authoritative legal books one can find. Books on various topics like Statutory Commentaries, Bare Acts, Digests, Taxation Books, Customs - Excise Books, Export - Import Books, Government Publications, etc. can be selected from the shop. Compact Discs on Law &amp; Taxation are also available.</font></p>
<p><font size=\\\"2\\\">Today online bookshop is having tie ups with several publishers. Our database continues to grow daily as we update with quality books. Our policy is to provide the very best books and services to the end user. Our clients include private and public libraries, schools, students and professors, researchers, scientists and professionals around the world. We&nbsp;are commited to meet the needs of customers with a wide selection of books and quality service. </font></p>
<p><font size=\\\"2\\\"><strong>Pricing Policy</strong>&nbsp;<br /><br />We aim to reflect the most accurate information on book prices at all times. We supply items at the publisher\\\'s recommended price except where a specific discount is offered. We will make reasonable efforts to present accurate information but we cannot guarantee the price or our ability to supply any particular book.&nbsp;<br /><br />Occasionally publishers may increase their prices unexpectedly, and this is often something we become aware of only upon ordering stock from them. In the event that this occurs, or in the event of a pricing error howsoever caused, we will check with you to see if you still wish to receive the item at the new price.</font></p>');
INSERT INTO `miscsections`(`misc_id`, `misc_cat`, `misc_content`) VALUES ('2', '2', '<font color=\\\"#800000\\\"><em><strong>ONLINEBOOKSHOP.IN </strong></em></font>is associate establishment of Law Book Shop. More than twenty Five Years of experience with lawyer customers and law graduates has helped us to create Kerala High Court Case Search, which has become the most powerful search tool for lawyers for viewing and quick searching of Law information database. Now there is no need to search through the volumes of books so as to defend the interests of their clients, every needed information is available at the click of a button. Thus this software is a helpful tool all. <br /> <br /><strong>Products of Law Book Services: </strong><br />KERALA HIGH COURT CASE SEARCH <br />LAW OFFICE <br /> <br />');
INSERT INTO `miscsections`(`misc_id`, `misc_cat`, `misc_content`) VALUES ('3', '3', '<font color=\\\"#800000\\\"><strong>How do I order books once I find them?</strong></font><br />Once you have found your book through search or browse links, you can place it in your shopping Cart. Just click on the &quot;Add to Shopping Cart&quot; button. This button is usually present on the pages that display information about a book. You can add as many books as you want to your Shopping Cart. Once you are through and you have decided about the books you wish to order, just click on the &quot;Proceed&quot; button on your Shopping Cart page. You will then be required to fill out an online order form.<br /><br /><font color=\\\"#800000\\\"><strong>What is Shopping Cart?</strong></font><br />Shopping Cart holds all your books that you pick from our online store. It retains these books till you proceed to place an order for these books. Or you save them to buy later. Or you simply remove them from the Cart.<br /><br /><strong><font color=\\\"#800000\\\">How can I save a book in my Shopping Cart to buy later?</font></strong><br />Your Shopping Cart lets you save a book till the time you are ready to buy it. All you have to click on the &quot;Save for Later&quot; link displayed with the book you put in your Shopping Cart. The Shopping Cart keeps the saved books for 1 days. Once you are ready to buy these books, just click on the &quot;\\\'Add to Cart &quot; link.<br /><br /><strong><font color=\\\"#800000\\\">How can I access my Shopping Cart?</font></strong><br />You can access your shopping Cart by simply clicking on the View Shopping Cart link given on the top of  top navigation bar and at the bottom of every page.<br /><br /><font color=\\\"#800000\\\"><strong>Do I have to buy a book once I add it to my Shopping Cart?</strong></font><br />No. You are not charged for any book until you place an order for it. You can also review and edit your order before submitting it finally. But once you submit your order, it\\\'s final.<br /><br /><font color=\\\"#800000\\\"><strong> How Do I know the status of My Order</strong></font><br /><br />You can view your order status from our website to using the option &quot;Your Account&quot;, however our Customer Service executives will be in touch with you regarding the status of your order until the order gets dispatched<em>.<a href=\\\"http://www.onlinebookshop.in/internationalshipping.php\\\"><font color=\\\"#ff9900\\\"><strong>SHIPPING INFORMATION</strong></font></a></em>');
INSERT INTO `miscsections`(`misc_id`, `misc_cat`, `misc_content`) VALUES ('4', '4', '<strong><font color=\\\"#800000\\\"> How Do I know the status of My Order?</font></strong><br />You can view your order status from our website to using the option &quot;Your Account&quot;, however our Customer Service executives will be in touch with you regarding the status of your order until the order gets dispatched.<br /><br /><font color=\\\"#800000\\\"><strong>Do I pay any shipping charges?</strong></font><br />For International shipping you can view the table below (With country name and shipping charges applicable)<br /><br /><strong><font color=\\\"#800000\\\">How do I track my order?</font></strong><br />You can track your order by using your Order number or the Way Bill number. To track your order go to www.aramexindia.com<br /><br /><strong><font color=\\\"#800000\\\">When my Credit card will be billed against the order?</font></strong><br />Please be assured your credit card will be billed only once we dispatched the order.<br /><br /><strong><font color=\\\"#800000\\\">How Can I return the Books?</font></strong><br />Books once dispatched can not be returned back until you gets wrong book or damaged books.<br />The complaint for replacement against the wrong or damaged books can be sent within 15 days of order delivery, after this period the same will not be applicable.<br /><br /> <font color=\\\"#800000\\\"><strong>How can I cancel an order?</strong></font><br />You can always cancel an order before shipment against the order. In case of cancellation you can send us a mail subjected Cancellation with order no. at <em><font color=\\\"#ff6600\\\"><strong>services@onlinebookshop.in .</strong></font></em> Once dispatched order will not be cancel.<br /><br />About International title the above is not applicable, you can only cancel the order for International title before confirmation against the order. We will not be able to cancel the order for these titles once we process the order. (since these titles are being procured against specific orders only).<br /><br /><font color=\\\"#800000\\\"><strong>How can I get the Refund against the cancelled order?</strong></font><br />We will not be charging for you against the titles we are unable to service the order. However in case of payment mode Cheque/DD.<br /><br />The amount against the cancelled title either will be refund to you or that will be credited in your account (As per your advice only) with us as a credit balance, which will gets adjusted automatically with your any future purchase with us.<br /><br /><strong><font color=\\\"#800000\\\">For International Customers</font></strong><br /><br />Note: You may be subject to import duties and taxes on certain items, which are levied once a shipment reaches your country. Additional charges for customs clearance must be borne by you; we have no control over these charges and cannot predict what they may be. Customs policies vary widely from country to country. Additionally, when ordering from<font color=\\\"#ff6600\\\"> <em><strong>onlinebookshop.in</strong></em>,</font> you are considered the importer of record and must comply with all laws and regulations of the country in which you are receiving the goods.

ORDER PLACEMENT:

All our customers, are given polite and personal attention and we give utmost care and service irrespective of the size of the order. We accept orders/queries for any books other than that has been listed in our database. In that case the customers are requested to give maximum possible details like the Author, Title, Publisher, ISBN number, Edition & Year of Publication, Price, Binding Status etc.

Modes of Ordering & Shipping:

Orders are accepted by:
 
Mail addressed to:	
Online Bookshop
Ist Floor, Oriental Complex
Banerji Rd - Market Rd Jn.
Ernakulam, Kochi, Kerala
INDIA - 682018.
Tel : +91-484-2398484
Fax :	+91-484-2398485	
E-mail : orders@onlinebookshop.in


PRICING & PRICE CHANGES :

All prices are listed in US Dollers and its corresponding Euro. Prices keep changing due to fluctuations in currency exchange rates also. Shipping charges are extra, as usual. 

SHIPMENT/SUPPLY - modes & packaging

Modes :
- Surface Mail Book-Packets (Registered)
Most economical and generally used
Maximum weight 5 kilograms (approx. 12 pounds)
Open for inspection in transit for customs purposes.
Door delivered by Post Office at the destination
Return postage guaranteed, if undelivered
Approximate Transit time: Asia, Europe & some parts of North & South Africa : 4-6 months America, Pacific & most parts of East, Central & West Africa : 6-8 months


- Air Mail Book-Packets (Registered)
Costs approximately 5 times of the surface-mail book-packet cost
Maximum weight 5 kilograms (approx. 12 pounds)
Open for inspection in transit
Door delivered by Post Office
Return postage guaranteed, if undelivered
Approximate Transit Time : 2-4 weeks


- Surface Air Lift (SAL) Book-Packets (Registered)
Service available only for Germany, Singapore, UK and USA at present
Costs approximately 3 times of the surface mail book-packet cost.
Maximum weight 5 kilograms (Approx. 12 pounds)
Open for inspection
Door delivered by Post Office
Return postage guaranteed, if undelivered.
Approximate Transit time : 2 months


- Bulk Bag (surface mail and Surface Air Lift)
Service available for most countries
Costs approximately the same as that of Surface Mail and Surface Air-Lift respectively, provided the weight is not less than 15 kilograms
Maximum weight 30 kilograms.
Open for inspection.
Door delivered in some countries, otherwise to be picked up from the nearest delivery post office.
Return postage guaranteed, if undelivered.
Approximate Transit time : same as that of Surface Mail book packets and Surface - Air Lift book packets.


- Air Freight
Service available from New Delhi Airport to the nearest International Airport of destinations.
Requires clearance through Customs at both ends
No weight limit but not advisable for less than 50 kilograms.
Normally packed in cartons each weighing around 25 kilograms.
Cost vary according to the airport of destination
Approximate Transit Time : 2-7 days after customs clearance in India.


- Sea Freight
Service available from one of the Indian ports to the nearest of port of destination.
Requires clearance through Customs at both ends.
No weight limit but not advisable for less than 200 kilograms.
Normally packed in wooden crates and even cartons.
Costs vary but charged by cubic metres.
Approximate Transit Time : 2-3 months after issuance of the Bill of Lading.


- EMS Speed Post/DHL Courier
Varying costs depending on the weight and destinations.
Door delivered by the relevant courier.
Approximate Transit Time : 3-10 days.
Note: Transit time indicated against each mode of supply is based on our experience over the years, but may vary with each shipment.

Packaging :
- Each item is checked to identify any physical deformities before shipment.
- Utmost care is taken in the packing of each packet/carton to enable it to withstand several handlings during its transit across the continents.


PAYMENTS :

CHEQUES:
   Please airmail personal US DOLLAR/EURO CHEQUES payable anywhere in the USA or EUROPE respectively favouring \\\"Online Bookshop\\\" to our Kochi address (overleaf).

BANK CHEQUES/DRAFTS:
   Airmail Bank cheques/drafts in US DOLLARS, STERLING POUNDS or EUROS drawn on any bank in the USA, UK or EUROPE respectively favouring \\\"\\\"Online Bookshop\\\" to our Kochi address (overleaf).

MT/TT/SWIFT (International Bank Money Orders/Bank Transfers): 
   If you wish to send the payment through Mail Transfer, you may send the payment using one of the following options :


US DOLLARS Payments	
These swift addresses and Account Numbers belong to our bank, 

The ICICI Bank Ltd., Mumbai 
for onward transmission to their Kochi Branch to Beneficiary Account No.: 001005002442


For credit to:
Online Bookshop
Ist Floor, Oriental Complex
Banerji Rd - Market Rd Jn.
Ernakulam, Kochi, Kerala
INDIA - 682018.
Tel : +91-484-2398484
Fax :	+91-484-2398485	
E-mail : orders@onlinebookshop.in
	

Swift Address: **********
********** Bank, New York
Account No.: **********	

AUSTRALIAN DOLLARS Payments	
Swift Address: **********
********** Bank Ltd., Melbourne
Account No.: 	

BRITISH POUNDS Payments	
Swift Address: **********
********** Bank, London
Account No.: **********	

EUROS Payments	
Swift Address: **********
********** Bank (Deutschland) A.G., Frankfurt
Account No.: **********

or

Swift Address: **********
Credit Lyonnais, Paris
Account No.: **********	
IMPORTANT :  Please inform us as and when you send the instructions to your bank for payment. Please state clearly the total value of the MT along with the date of instruction. Please also state our invoice nos. & date. Above information will enable us to co-relate the MT when we receive information from our bank.

	

CREDIT CARDS : [AMERICAN EXPRESS, MASTER and VISA]

Send an AUTHORIZATION favouring \\\"Online Bookshop\\\" with the following details :
Credit card number
CVV / CVC number
Name of the card-holder as on the card
Expiry/Validity date of the card
Amount to be charged
our invoice number(s).
NOTE : 
Kindly avoid sending money through the Post Office.
Indicate our invoice number(s) invariably irrespective of the mode of yourpayment.
Important :  Please indicate our INVOICE NUMBER(S) invariably, while remitting.Inform us about your remittance details by fax +91-11-25357103 or by email to act@dkagencies.com


CANCELLATIONS

Order cancellation may be accepted by DK in most of the cases, if your cancellation advice reaches us prior to supply of the material. For subscriptions, credits for the cancelled titles can be given to the customer after the publisher refunds the money for the cancelled item to DK.



CLAIMS & REPORTING :

Each order reaching DK is first recorded under an appropriate system and then processed for procurement/supply, thus leaving no chances of an order remaining unattended. We monitor all outstanding orders at regular intervals. If your ordered items are late in arriving, we intensify our procurement effort -- letting it up only when the customer cancels the same or the publisher informs of its non-availability due to any reason, in which case the customer is duly informed.

Even though we hold huge databases of titles, authors and publishers, at times we may fail to locate the publication information about any of your ordered items. In such cases, we may have to trouble the customer for more particulars on that item.

With the kind of services we give, there are barest minimal chances of your ordered item (whether a subscription periodical or a book/monograph) going astray in its transit -- because we send all material to the clients by \\\'Registered Post\\\' and that too after we ourselves have procured, checked and re-packed it.

Still, if a situation arises in which case you have to claim an ordered item, DK attend to your claims promptly. All claims whether for periodical subscriptions, books/monographs, continuations or back-volumes are responded to immediately with the latest status indications, including the shipment details if the item in question is already in transit. We, of course, expect our customers to allow a sufficient time-margin before claiming an item in view of the procurement efforts involved and international delivery constraints.



CHANGE OF ADDRESS/SHIPPING INSTRUCTIONS :

If a change in your address is warranted, we would like to have -- at the earliest, your new address together with details of the old. It is a logical necessity for our recurring transactions with you. And, importantly, we incorporate these changes in our office records without any delay. Should there be any need for a change in any of your shipping/invoicing instructions, we would welcome you to write to us about the same.



DISPUTES/JURISDICTION:

Disputes, if any, will be subject to Delhi (India) Jurisdiction only.');
DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE `newsletter` (
  `NL_ID` bigint(20) NOT NULL auto_increment,
  `NL_EMAIL` varchar(200) NOT NULL default '',
  `NL_STATUS` int(11) default '0',
  PRIMARY KEY  (`NL_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO `newsletter`(`NL_ID`, `NL_EMAIL`, `NL_STATUS`) VALUES ('1', 'anand@yahoo.com', '0');
INSERT INTO `newsletter`(`NL_ID`, `NL_EMAIL`, `NL_STATUS`) VALUES ('13', 'qwerty@qwerty.com', '0');
INSERT INTO `newsletter`(`NL_ID`, `NL_EMAIL`, `NL_STATUS`) VALUES ('4', 'ASD@ABC.COM', '0');
INSERT INTO `newsletter`(`NL_ID`, `NL_EMAIL`, `NL_STATUS`) VALUES ('6', 'raju_anandu@yahoo.com', '0');
INSERT INTO `newsletter`(`NL_ID`, `NL_EMAIL`, `NL_STATUS`) VALUES ('7', 'hari@yahoo.com', '0');
INSERT INTO `newsletter`(`NL_ID`, `NL_EMAIL`, `NL_STATUS`) VALUES ('14', 'sangeeth@imcc.ae', '0');
INSERT INTO `newsletter`(`NL_ID`, `NL_EMAIL`, `NL_STATUS`) VALUES ('15', 'rchn_sekhar@yahoo.co.in', '0');
INSERT INTO `newsletter`(`NL_ID`, `NL_EMAIL`, `NL_STATUS`) VALUES ('11', 'lawbookshop@vsnl.net', '0');
INSERT INTO `newsletter`(`NL_ID`, `NL_EMAIL`, `NL_STATUS`) VALUES ('12', 'domjohn1973@hotmail.com', '0');
INSERT INTO `newsletter`(`NL_ID`, `NL_EMAIL`, `NL_STATUS`) VALUES ('16', 'drpriyapeethambar@gmail.com', '0');
DROP TABLE IF EXISTS `phplist_admin`;
CREATE TABLE `phplist_admin` (
  `id` int(11) NOT NULL auto_increment,
  `loginname` varchar(25) NOT NULL default '',
  `namelc` varchar(255) default NULL,
  `email` varchar(255) NOT NULL default '',
  `created` datetime default NULL,
  `modified` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `modifiedby` varchar(25) default NULL,
  `password` varchar(255) default NULL,
  `passwordchanged` date default NULL,
  `superuser` tinyint(4) default '0',
  `disabled` tinyint(4) default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `loginname` (`loginname`),
  KEY `loginnameidx` (`loginname`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `phplist_admin`(`id`, `loginname`, `namelc`, `email`, `created`, `modified`, `modifiedby`, `password`, `passwordchanged`, `superuser`, `disabled`) VALUES ('1', 'admin', 'admin', 'sales@onlinebookshop.in', '2007-11-06 08:22:49', '2007-11-06 14:24:15', 'admin', 'onlinebookshop', '2007-11-06', '1', '0');
DROP TABLE IF EXISTS `phplist_admin_attribute`;
CREATE TABLE `phplist_admin_attribute` (
  `adminattributeid` int(11) NOT NULL default '0',
  `adminid` int(11) NOT NULL default '0',
  `value` varchar(255) default NULL,
  PRIMARY KEY  (`adminattributeid`,`adminid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_admin_task`;
CREATE TABLE `phplist_admin_task` (
  `adminid` int(11) NOT NULL default '0',
  `taskid` int(11) NOT NULL default '0',
  `level` int(11) default NULL,
  PRIMARY KEY  (`adminid`,`taskid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_adminattribute`;
CREATE TABLE `phplist_adminattribute` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `type` varchar(30) default NULL,
  `listorder` int(11) default NULL,
  `default_value` varchar(255) default NULL,
  `required` tinyint(4) default NULL,
  `tablename` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_attachment`;
CREATE TABLE `phplist_attachment` (
  `id` int(11) NOT NULL auto_increment,
  `filename` varchar(255) default NULL,
  `remotefile` varchar(255) default NULL,
  `mimetype` varchar(255) default NULL,
  `description` text,
  `size` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_bounce`;
CREATE TABLE `phplist_bounce` (
  `id` int(11) NOT NULL auto_increment,
  `date` datetime default NULL,
  `header` text,
  `data` blob,
  `status` varchar(255) default NULL,
  `comment` text,
  PRIMARY KEY  (`id`),
  KEY `dateindex` (`date`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_bounceregex`;
CREATE TABLE `phplist_bounceregex` (
  `id` int(11) NOT NULL auto_increment,
  `regex` varchar(255) default NULL,
  `action` varchar(255) default NULL,
  `listorder` int(11) default '0',
  `admin` int(11) default NULL,
  `comment` text,
  `status` varchar(255) default NULL,
  `count` int(11) default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `regex` (`regex`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_bounceregex_bounce`;
CREATE TABLE `phplist_bounceregex_bounce` (
  `regex` int(11) NOT NULL default '0',
  `bounce` int(11) NOT NULL default '0',
  PRIMARY KEY  (`regex`,`bounce`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_config`;
CREATE TABLE `phplist_config` (
  `item` varchar(35) NOT NULL default '',
  `value` longtext,
  `editable` tinyint(4) default '1',
  `type` varchar(25) default NULL,
  PRIMARY KEY  (`item`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('version', '2.10.5', '0', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('updatelastcheck', '2007-11-06 08:22:49', '0', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('website', 'onlinebookshop.in', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('domain', 'onlinebookshop.in', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('xormask', 'e376ae325faf89f44827a9c1107db70d', '0', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('admin_address', 'webmaster@[DOMAIN]', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('check_new_version', '7', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('admin_addresses', '', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('report_address', 'listreports@[DOMAIN]', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('message_from_address', 'noreply@[DOMAIN]', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('message_from_name', 'Webmaster', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('message_replyto_address', 'noreply@[DOMAIN]', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('hide_single_list', '1', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('textline_width', '40', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('textarea_dimensions', '10,40', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('send_admin_copies', '0', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('defaultsubscribepage', '1', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('defaultmessagetemplate', '0', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('subscribeurl', 'http://[WEBSITE]/lists/?p=subscribe', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('unsubscribeurl', 'http://[WEBSITE]/lists/?p=unsubscribe', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('confirmationurl', 'http://[WEBSITE]/lists/?p=confirm', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('preferencesurl', 'http://[WEBSITE]/lists/?p=preferences', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('forwardurl', 'http://[WEBSITE]/lists/?p=forward', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('subscribesubject', 'Request for confirmation', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('subscribemessage', '

  Almost welcome to our newsletter(s) ...

  Someone, hopefully you, has subscribed your email address to the following newsletters:
  
  [LISTS]

  If this is correct, please click the following link to confirm your subscription.
  Without this confirmation, you will not receive any newsletters.
  
  [CONFIRMATIONURL]
  
  If this is not correct, you do not need to do anything, simply delete this message.

  Thank you
  
    ', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('unsubscribesubject', 'Goodbye from our Newsletter', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('unsubscribemessage', '
  
  Goodbye from our Newsletter, sorry to see you go.

  You have been unsubscribed from our newsletters.

  This is the last email you will receive from us. We have added you to our
  \"blacklist\", which means that our newsletter system will refuse to send
  you any other email, without manual intervention by our administrator.

  If there is an error in this information, you can re-subscribe:
  please go to [SUBSCRIBEURL] and follow the steps.

  Thank you
  
  ', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('confirmationsubject', 'Welcome to our Newsletter', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('confirmationmessage', '
  
  Welcome to our Newsletter

  Please keep this email for later reference.

  Your email address has been added to the following newsletter(s):
  [LISTS]

  To update your details and preferences please go to [PREFERENCESURL].
  If you do not want to receive any more messages, please go to [UNSUBSCRIBEURL].

  Thank you
  
  ', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('updatesubject', '[notify] Change of List-Membership details', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('updatemessage', '
  
  This message is to inform you of a change of your details on our newsletter database

  You are currently member of the following newsletters:
  
  [LISTS]
  
  [CONFIRMATIONINFO]
  
  The information on our system for you is as follows:
  
  [USERDATA]
  
  If this is not correct, please update your information at the following location:
  
  [PREFERENCESURL]
  
  Thank you
  
    ', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('emailchanged_text', '
  When updating your details, your email address has changed.
  Please confirm your new email address by visiting this webpage:
  
  [CONFIRMATIONURL]
  
  ', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('emailchanged_text_oldaddress', '
  Please Note: when updating your details, your email address has changed.

  A message has been sent to your new email address with a URL
  to confirm this change. Please visit this website to activate
  your membership.
  ', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('personallocation_subject', 'Your personal location', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('personallocation_message', '
  
  You have requested your personal location to update your details from our website.
  The location is below. Please make sure that you use the full line as mentioned below.
  Sometimes email programme can wrap the line into multiple lines.
  
  Your personal location is:
  [PREFERENCESURL]
  
  Thank you.
  ', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('messagefooter', '--
If you do not want to receive any more newsletters,  [UNSUBSCRIBE]

To update your preferences and to unsubscribe visit [PREFERENCES]
Forward a Message to Someone [FORWARD]', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('forwardfooter', '--
This message has been forwarded to you by [FORWARDEDBY].
  You have not been automatically subscribed to this newsletter.
  To subscribe to this newsletter go to

 [SUBSCRIBE]
', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('pageheader', '<link href=\"styles/phplist.css\" type=\"text/css\" rel=\"stylesheet\">
</head>
<body bgcolor=\"#ffffff\" background=\"images/bg.png\">
<a name=\"top\"></a>
<div align=center>
<table cellspacing=0 cellpadding=0 width=710 border=0>
<tr>
<td bgcolor=\"#000000\" rowspan=3><img height=1 alt=\"\" src=\"images/transparent.png\" width=1 border=0></td>
<td bgcolor=\"#000000\"><img height=1 alt=\"\" src=\"images/transparent.png\" width=708 border=0></td>
<td bgcolor=\"#000000\" rowspan=3><img height=1 alt=\"\" src=\"images/transparent.png\" width=1 border=0></td>
</tr>

<tr valign=\"top\" align=\"left\">
<td>
<!--TOP TABLE starts-->
<TABLE cellSpacing=0 cellPadding=0 width=708 bgColor=#ffffff border=0>
  <TR vAlign=top>
    <TD colSpan=2 rowspan=\"2\" height=\"63\" background=\"images/topstrip.png\"><a href=\"http://www.phplist.com\" target=\"_blank\"><img src=\"images/masthead.png\" border=0 width=577 height=75></a></TD>
    <TD align=left
      background=\"images/topstrip.png\" bgcolor=\"#F0D1A3\"><FONT
      size=-2>&nbsp;<I>powered by: </I><BR>&nbsp;<B>[<A class=powered
      href=\"http://www.php.net/\" target=_new><I>PHP</I></A>]</B> + <B>[<A
      class=powered href=\"http://www.mysql.com/\"
      target=_new>mySQL</A>]</B></FONT></TD></TR>
  <TR vAlign=bottom>
    <TD vAlign=bottom width=132
    background=\"images/topright.png\" bgcolor=\"#F0D1A3\"><SPAN
      class=webblermenu>PHPlist</SPAN></TD></TR>
  <TR>
    <TD bgColor=#000000><IMG height=1 alt=\"\"
      src=\"images/transparent.png\" width=20
      border=0></TD>
    <TD bgColor=#000000><IMG height=1 alt=\"\"
      src=\"images/transparent.png\" width=576
      border=0></TD>
    <TD bgColor=#000000><IMG height=1 alt=\"\"
      src=\"images/transparent.png\" width=132
      border=0></TD></TR>
  <TR vAlign=top>
    <TD>&nbsp;</TD>
<td><div align=left>
<br />
', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('pagefooter', '</div>
</td>
<td>
<div class=\"menutableright\">

</div>
</td>
</tr>




<tr><td colspan=\"4\">&nbsp;</td></tr>



<tr><td colspan=\"4\">&nbsp;</td></tr>
</table>
<!--TOP TABLE ends-->

</td></tr>


<tr>
<td bgcolor=\"#000000\" colspan=3><img height=1 alt=\"\" src=\"images/transparent.png\" width=1 border=0></td>
</tr>

<tr>
<td bgcolor=\"#000000\"><img height=1 alt=\"\" src=\"images/transparent.png\" width=1 border=0></td>
<td bgcolor=\"#ff9900\" class=\"bottom\">&copy; <a href=\"http://tincan.co.uk\" target=\"_tincan\" class=\"urhere\">tincan limited</a> | <a class=\"urhere\" href=\"http://www.phplist.com\" target=\"_blank\">phplist</a> - version <?php echo VERSION?></td>
<td bgcolor=\"#000000\"><img height=1 alt=\"\" src=\"images/transparent.png\" width=1 border=0></td>
</tr>

<tr>
<td bgcolor=\"#000000\" colspan=3><img height=1 alt=\"\" src=\"images/transparent.png\" width=1 border=0></td>
</tr>

<tr>
<td colspan=3><img height=3 alt=\"\" src=\"images/transparent.png\" width=1 border=0></td>
</tr>

<tr>
<td colspan=3>
&nbsp;
</td>
</tr>
</tbody>
</table>

</div>
</body></html>
', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('html_charset', 'UTF-8', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('text_charset', 'UTF-8', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('html_email_style', '
  <style type=\"text/css\">
  body { font-size : 11px; font-family: Verdana, Arial, Helvetica, sans-serif; }
  a { font-size: 11px; color: #ff6600; font-style: normal; font-family: verdana, sans-serif; text-decoration: none; }
  a:visited { color: #666666; }
  a:hover {  text-decoration: underline; }
  p { font-weight: normal; font-size: 11px; color: #666666; font-style: normal; font-family: verdana, sans-serif; text-decoration: none; }
  h1 {font-weight: bold; font-size: 14px; color: #666666; font-style: normal; font-family: verdana, sans-serif; text-decoration: none;}
  h2 {font-weight: bold; font-size: 13px; color: #666666; font-style: normal; font-family: verdana, sans-serif; text-decoration: none;}
  h3 {font-weight: bold; font-size: 12px; color: #666666; font-style: normal; font-family: verdana, sans-serif; text-decoration: none; margin:0px; padding:0px;}
  h4 {font-weight: bold; font-size: 11px; color: #666666; font-style: normal; font-family: verdana, sans-serif; text-decoration: none; margin:0px; padding:0px;}
  hr {width : 100%; height : 1px; color: #ff9900; size:1px;}
  .forwardform {margin: 0 0 0 0; padding: 0 0 0 0;}
  .forwardinput {margin: 0 0 0 0; padding: 0 0 0 0;}
  .forwardsubmit {margin: 0 0 0 0; padding: 0 0 0 0;}
  div.emailfooter { font-size : 11px; font-family: Verdana, Arial, Helvetica, sans-serif; }
  div.emailfooter a { font-size: 11px; color: #ff6600; font-style: normal; font-family: verdana, sans-serif; text-decoration: none; }
  </style>
  ', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('alwayssendtextto', 'mail.com
email.com', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('fckeditor_width', '600', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('fckeditor_height', '600', '1', '');
INSERT INTO `phplist_config`(`item`, `value`, `editable`, `type`) VALUES ('membership_columns', '', '1', '');
DROP TABLE IF EXISTS `phplist_eventlog`;
CREATE TABLE `phplist_eventlog` (
  `id` int(11) NOT NULL auto_increment,
  `entered` datetime default NULL,
  `page` varchar(100) default NULL,
  `entry` text,
  PRIMARY KEY  (`id`),
  KEY `enteredidx` (`entered`),
  KEY `pageidx` (`page`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_linktrack`;
CREATE TABLE `phplist_linktrack` (
  `linkid` int(11) NOT NULL auto_increment,
  `messageid` int(11) NOT NULL default '0',
  `userid` int(11) NOT NULL default '0',
  `url` varchar(255) default NULL,
  `forward` text,
  `firstclick` datetime default NULL,
  `latestclick` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `clicked` int(11) default '0',
  PRIMARY KEY  (`linkid`),
  UNIQUE KEY `messageid` (`messageid`,`userid`,`url`),
  KEY `midindex` (`messageid`),
  KEY `uidindex` (`userid`),
  KEY `urlindex` (`url`),
  KEY `miduidindex` (`messageid`,`userid`),
  KEY `miduidurlindex` (`messageid`,`userid`,`url`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_linktrack_userclick`;
CREATE TABLE `phplist_linktrack_userclick` (
  `linkid` int(11) NOT NULL default '0',
  `userid` int(11) NOT NULL default '0',
  `messageid` int(11) NOT NULL default '0',
  `name` varchar(255) default NULL,
  `data` text,
  `date` datetime default NULL,
  KEY `linkindex` (`linkid`),
  KEY `uidindex` (`userid`),
  KEY `midindex` (`messageid`),
  KEY `linkuserindex` (`linkid`,`userid`),
  KEY `linkusermessageindex` (`linkid`,`userid`,`messageid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_list`;
CREATE TABLE `phplist_list` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `description` text,
  `entered` datetime default NULL,
  `listorder` int(11) default NULL,
  `prefix` varchar(10) default NULL,
  `rssfeed` varchar(255) default NULL,
  `modified` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `active` tinyint(4) default NULL,
  `owner` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `nameidx` (`name`),
  KEY `listorderidx` (`listorder`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `phplist_list`(`id`, `name`, `description`, `entered`, `listorder`, `prefix`, `rssfeed`, `modified`, `active`, `owner`) VALUES ('1', 'onlinebookusers', 'List for testing.', '2007-11-06 08:22:49', '1', '', '', '2007-11-06 14:33:28', '1', '1');
DROP TABLE IF EXISTS `phplist_listmessage`;
CREATE TABLE `phplist_listmessage` (
  `id` int(11) NOT NULL auto_increment,
  `messageid` int(11) NOT NULL default '0',
  `listid` int(11) NOT NULL default '0',
  `entered` datetime default NULL,
  `modified` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `messageid` (`messageid`,`listid`),
  KEY `listmessageidx` (`listid`,`messageid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_listrss`;
CREATE TABLE `phplist_listrss` (
  `listid` int(11) NOT NULL default '0',
  `type` varchar(255) NOT NULL default '',
  `entered` datetime NOT NULL default '0000-00-00 00:00:00',
  `info` text,
  KEY `listididx` (`listid`),
  KEY `enteredidx` (`entered`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_listuser`;
CREATE TABLE `phplist_listuser` (
  `userid` int(11) NOT NULL default '0',
  `listid` int(11) NOT NULL default '0',
  `entered` datetime default NULL,
  `modified` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`userid`,`listid`),
  KEY `userenteredidx` (`userid`,`entered`),
  KEY `userlistenteredidx` (`userid`,`listid`,`entered`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_message`;
CREATE TABLE `phplist_message` (
  `id` int(11) NOT NULL auto_increment,
  `subject` varchar(255) NOT NULL default '(no subject)',
  `fromfield` varchar(255) NOT NULL default '',
  `tofield` varchar(255) NOT NULL default '',
  `replyto` varchar(255) NOT NULL default '',
  `message` text,
  `textmessage` text,
  `footer` text,
  `entered` datetime default NULL,
  `modified` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `embargo` datetime default NULL,
  `repeatinterval` int(11) default '0',
  `repeatuntil` datetime default NULL,
  `status` varchar(255) default NULL,
  `userselection` text,
  `sent` datetime default NULL,
  `htmlformatted` tinyint(4) default '0',
  `sendformat` varchar(20) default NULL,
  `template` int(11) default NULL,
  `processed` mediumint(8) unsigned default '0',
  `astext` int(11) default '0',
  `ashtml` int(11) default '0',
  `astextandhtml` int(11) default '0',
  `aspdf` int(11) default '0',
  `astextandpdf` int(11) default '0',
  `viewed` int(11) default '0',
  `bouncecount` int(11) default '0',
  `sendstart` datetime default NULL,
  `rsstemplate` varchar(100) default NULL,
  `owner` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO `phplist_message`(`id`, `subject`, `fromfield`, `tofield`, `replyto`, `message`, `textmessage`, `footer`, `entered`, `modified`, `embargo`, `repeatinterval`, `repeatuntil`, `status`, `userselection`, `sent`, `htmlformatted`, `sendformat`, `template`, `processed`, `astext`, `ashtml`, `astextandhtml`, `aspdf`, `astextandpdf`, `viewed`, `bouncecount`, `sendstart`, `rsstemplate`, `owner`) VALUES ('1', '(no subject)', '', '', '', '', '', '', '2007-11-06 08:25:20', '2007-11-06 14:25:20', '2007-11-06 08:25:20', '0', '2007-11-06 08:25:20', 'draft', '', '', '0', 'HTML', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '1');
INSERT INTO `phplist_message`(`id`, `subject`, `fromfield`, `tofield`, `replyto`, `message`, `textmessage`, `footer`, `entered`, `modified`, `embargo`, `repeatinterval`, `repeatuntil`, `status`, `userselection`, `sent`, `htmlformatted`, `sendformat`, `template`, `processed`, `astext`, `ashtml`, `astextandhtml`, `aspdf`, `astextandpdf`, `viewed`, `bouncecount`, `sendstart`, `rsstemplate`, `owner`) VALUES ('2', '(no subject)', '', '', '', '', '', '', '2007-11-06 08:25:36', '2007-11-06 14:25:36', '2007-11-06 08:25:36', '0', '2007-11-06 08:25:36', 'draft', '', '', '0', 'HTML', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '1');
INSERT INTO `phplist_message`(`id`, `subject`, `fromfield`, `tofield`, `replyto`, `message`, `textmessage`, `footer`, `entered`, `modified`, `embargo`, `repeatinterval`, `repeatuntil`, `status`, `userselection`, `sent`, `htmlformatted`, `sendformat`, `template`, `processed`, `astext`, `ashtml`, `astextandhtml`, `aspdf`, `astextandpdf`, `viewed`, `bouncecount`, `sendstart`, `rsstemplate`, `owner`) VALUES ('3', '(no subject)', '', '', '', '', '', '', '2007-11-06 08:27:25', '2007-11-06 14:27:25', '2007-11-06 08:27:25', '0', '2007-11-06 08:27:25', 'draft', '', '', '0', 'HTML', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '1');
INSERT INTO `phplist_message`(`id`, `subject`, `fromfield`, `tofield`, `replyto`, `message`, `textmessage`, `footer`, `entered`, `modified`, `embargo`, `repeatinterval`, `repeatuntil`, `status`, `userselection`, `sent`, `htmlformatted`, `sendformat`, `template`, `processed`, `astext`, `ashtml`, `astextandhtml`, `aspdf`, `astextandpdf`, `viewed`, `bouncecount`, `sendstart`, `rsstemplate`, `owner`) VALUES ('4', '(no subject)', '', '', '', '', '', '', '2007-11-06 08:28:50', '2007-11-06 14:28:50', '2007-11-06 08:28:50', '0', '2007-11-06 08:28:50', 'draft', '', '', '0', 'HTML', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '1');
INSERT INTO `phplist_message`(`id`, `subject`, `fromfield`, `tofield`, `replyto`, `message`, `textmessage`, `footer`, `entered`, `modified`, `embargo`, `repeatinterval`, `repeatuntil`, `status`, `userselection`, `sent`, `htmlformatted`, `sendformat`, `template`, `processed`, `astext`, `ashtml`, `astextandhtml`, `aspdf`, `astextandpdf`, `viewed`, `bouncecount`, `sendstart`, `rsstemplate`, `owner`) VALUES ('5', '(no subject)', '', '', '', '', '', '', '2007-11-06 08:29:58', '2007-11-06 14:29:58', '2007-11-06 08:29:58', '0', '2007-11-06 08:29:58', 'draft', '', '', '0', 'HTML', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '1');
INSERT INTO `phplist_message`(`id`, `subject`, `fromfield`, `tofield`, `replyto`, `message`, `textmessage`, `footer`, `entered`, `modified`, `embargo`, `repeatinterval`, `repeatuntil`, `status`, `userselection`, `sent`, `htmlformatted`, `sendformat`, `template`, `processed`, `astext`, `ashtml`, `astextandhtml`, `aspdf`, `astextandpdf`, `viewed`, `bouncecount`, `sendstart`, `rsstemplate`, `owner`) VALUES ('6', '(no subject)', '', '', '', '', '', '', '2007-11-06 08:38:04', '2007-11-06 14:38:04', '2007-11-06 08:38:04', '0', '2007-11-06 08:38:04', 'draft', '', '', '0', 'HTML', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '1');
INSERT INTO `phplist_message`(`id`, `subject`, `fromfield`, `tofield`, `replyto`, `message`, `textmessage`, `footer`, `entered`, `modified`, `embargo`, `repeatinterval`, `repeatuntil`, `status`, `userselection`, `sent`, `htmlformatted`, `sendformat`, `template`, `processed`, `astext`, `ashtml`, `astextandhtml`, `aspdf`, `astextandpdf`, `viewed`, `bouncecount`, `sendstart`, `rsstemplate`, `owner`) VALUES ('7', '(no subject)', '', '', '', '', '', '', '2007-11-06 08:38:46', '2007-11-06 14:38:46', '2007-11-06 08:38:46', '0', '2007-11-06 08:38:46', 'draft', '', '', '0', 'HTML', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '1');
INSERT INTO `phplist_message`(`id`, `subject`, `fromfield`, `tofield`, `replyto`, `message`, `textmessage`, `footer`, `entered`, `modified`, `embargo`, `repeatinterval`, `repeatuntil`, `status`, `userselection`, `sent`, `htmlformatted`, `sendformat`, `template`, `processed`, `astext`, `ashtml`, `astextandhtml`, `aspdf`, `astextandpdf`, `viewed`, `bouncecount`, `sendstart`, `rsstemplate`, `owner`) VALUES ('8', '(no subject)', '', '', '', '', '', '', '2007-11-06 08:39:24', '2007-11-06 14:39:24', '2007-11-06 08:39:24', '0', '2007-11-06 08:39:24', 'draft', '', '', '0', 'HTML', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '1');
INSERT INTO `phplist_message`(`id`, `subject`, `fromfield`, `tofield`, `replyto`, `message`, `textmessage`, `footer`, `entered`, `modified`, `embargo`, `repeatinterval`, `repeatuntil`, `status`, `userselection`, `sent`, `htmlformatted`, `sendformat`, `template`, `processed`, `astext`, `ashtml`, `astextandhtml`, `aspdf`, `astextandpdf`, `viewed`, `bouncecount`, `sendstart`, `rsstemplate`, `owner`) VALUES ('9', '(no subject)', '', '', '', '', '', '', '2007-11-07 09:40:06', '2007-11-07 15:47:08', '2007-11-07 09:40:00', '0', '2007-11-07 09:40:06', 'draft', '', '', '0', 'text', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '1');
INSERT INTO `phplist_message`(`id`, `subject`, `fromfield`, `tofield`, `replyto`, `message`, `textmessage`, `footer`, `entered`, `modified`, `embargo`, `repeatinterval`, `repeatuntil`, `status`, `userselection`, `sent`, `htmlformatted`, `sendformat`, `template`, `processed`, `astext`, `ashtml`, `astextandhtml`, `aspdf`, `astextandpdf`, `viewed`, `bouncecount`, `sendstart`, `rsstemplate`, `owner`) VALUES ('10', '(no subject)', 'admin sales@onlinebookshop.in', '', '', 'fasdasd', '', '--
If you do not want to receive any more newsletters,  [UNSUBSCRIBE]

To update your preferences and to unsubscribe visit [PREFERENCES]
Forward a Message to Someone [FORWARD]', '2007-11-10 06:12:11', '2007-11-10 12:12:58', '2007-11-10 06:12:00', '0', '2007-11-10 06:12:11', 'draft', '', '', '0', 'HTML', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '1');
DROP TABLE IF EXISTS `phplist_message_attachment`;
CREATE TABLE `phplist_message_attachment` (
  `id` int(11) NOT NULL auto_increment,
  `messageid` int(11) NOT NULL default '0',
  `attachmentid` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `messageidx` (`messageid`),
  KEY `messageattidx` (`messageid`,`attachmentid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_messagedata`;
CREATE TABLE `phplist_messagedata` (
  `name` varchar(100) NOT NULL default '',
  `id` int(11) NOT NULL default '0',
  `data` text,
  PRIMARY KEY  (`name`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `phplist_messagedata`(`name`, `id`, `data`) VALUES ('notify_start', '9', 'lawbookshop@vsnl.net');
INSERT INTO `phplist_messagedata`(`name`, `id`, `data`) VALUES ('notify_end', '9', 'domjohn1973@hotmail.com');
DROP TABLE IF EXISTS `phplist_rssitem`;
CREATE TABLE `phplist_rssitem` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL default '',
  `link` varchar(100) NOT NULL default '',
  `source` varchar(255) default NULL,
  `list` int(11) NOT NULL default '0',
  `added` datetime default NULL,
  `processed` mediumint(8) unsigned default '0',
  `astext` int(11) default '0',
  `ashtml` int(11) default '0',
  PRIMARY KEY  (`id`),
  KEY `titlelinkidx` (`title`,`link`),
  KEY `titleidx` (`title`),
  KEY `listidx` (`list`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_rssitem_data`;
CREATE TABLE `phplist_rssitem_data` (
  `itemid` int(11) NOT NULL default '0',
  `tag` varchar(100) NOT NULL default '',
  `data` text,
  PRIMARY KEY  (`itemid`,`tag`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_rssitem_user`;
CREATE TABLE `phplist_rssitem_user` (
  `itemid` int(11) NOT NULL default '0',
  `userid` int(11) NOT NULL default '0',
  `entered` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`itemid`,`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_sendprocess`;
CREATE TABLE `phplist_sendprocess` (
  `id` int(11) NOT NULL auto_increment,
  `started` datetime default NULL,
  `modified` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `alive` int(11) default '1',
  `ipaddress` varchar(50) default NULL,
  `page` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_subscribepage`;
CREATE TABLE `phplist_subscribepage` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `active` tinyint(4) default '0',
  `owner` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_subscribepage_data`;
CREATE TABLE `phplist_subscribepage_data` (
  `id` int(11) NOT NULL default '0',
  `name` varchar(100) NOT NULL default '',
  `data` text,
  PRIMARY KEY  (`id`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_task`;
CREATE TABLE `phplist_task` (
  `id` int(11) NOT NULL auto_increment,
  `page` varchar(25) NOT NULL default '',
  `type` varchar(25) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `page` (`page`),
  KEY `pageidx` (`page`),
  KEY `pagetypeidx` (`page`,`type`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('1', 'adminattributes', 'system');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('2', 'attributes', 'system');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('3', 'upgrade', 'system');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('4', 'configure', 'system');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('5', 'spage', 'system');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('6', 'spageedit', 'system');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('7', 'defaultconfig', 'system');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('8', 'defaults', 'system');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('9', 'initialise', 'system');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('10', 'bounces', 'system');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('11', 'bounce', 'system');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('12', 'processbounces', 'system');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('13', 'eventlog', 'system');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('14', 'reconcileusers', 'system');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('15', 'getrss', 'system');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('16', 'viewrss', 'system');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('17', 'purgerss', 'system');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('18', 'setup', 'system');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('19', 'dbcheck', 'system');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('20', 'list', 'list');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('21', 'editlist', 'list');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('22', 'members', 'list');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('23', 'user', 'user');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('24', 'users', 'user');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('25', 'dlusers', 'user');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('26', 'editattributes', 'user');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('27', 'usercheck', 'user');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('28', 'import1', 'user');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('29', 'import2', 'user');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('30', 'import3', 'user');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('31', 'import4', 'user');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('32', 'import', 'user');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('33', 'export', 'user');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('34', 'massunconfirm', 'user');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('35', 'message', 'message');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('36', 'messages', 'message');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('37', 'processqueue', 'message');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('38', 'send', 'message');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('39', 'preparesend', 'message');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('40', 'sendprepared', 'message');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('41', 'template', 'message');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('42', 'templates', 'message');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('43', 'statsmgt', 'clickstats');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('44', 'mclicks', 'clickstats');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('45', 'uclicks', 'clickstats');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('46', 'userclicks', 'clickstats');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('47', 'mviews', 'clickstats');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('48', 'statsoverview', 'clickstats');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('49', 'admins', 'admin');
INSERT INTO `phplist_task`(`id`, `page`, `type`) VALUES ('50', 'admin', 'admin');
DROP TABLE IF EXISTS `phplist_template`;
CREATE TABLE `phplist_template` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `template` longblob,
  `listorder` int(11) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_templateimage`;
CREATE TABLE `phplist_templateimage` (
  `id` int(11) NOT NULL auto_increment,
  `template` int(11) NOT NULL default '0',
  `mimetype` varchar(100) default NULL,
  `filename` varchar(100) default NULL,
  `data` longblob,
  `width` int(11) default NULL,
  `height` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `templateidx` (`template`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `phplist_templateimage`(`id`, `template`, `mimetype`, `filename`, `data`, `width`, `height`) VALUES ('1', '0', 'image/png', 'powerphplist.png', 'iVBORw0KGgoAAAANSUhEUgAAAEYAAAAeCAMAAACmLZgsAAADAFBMVEXYx6fmfGXfnmCchGd3VDPipmrouYIHBwe3qpNlVkTmcWHdmFrfRTeojW3IpXn25L7mo3TaGhe6mXLCmm+7lGnntn7sx5Sxh1usk3akdEfBiFPtyJfgo2bjqW7krnTjqnDproK1pInvODRRTEKFemnuzaAtIRXenF7KqIHfn2KHcVjtyZjnqHrnknLhpGjnt4HeMyzlnnHr1rLkmW3WAADllGuUfmPcKSMcFxLnuICUd1f037kqJiDqv47sxZLYAQHLtJLfOTI7KhrInnHqwY7hTUHz2rGDbVTz27Xkr3XJvKPng3HuypzouoPrwo/hXk3x1qzqwIvizavrwpDu0atqYVTqnoBdTz7QlFvqtYbgST14cWPar33hYkrw0qZKQjjdml12XkPSv52NhHPovIjjrHLZDQz03bbsxZHcq3fgQjsUEg92YUmUinjgpGbvz6PZtYjcp3Tr2bWEaUzz3LXx1KhFOi7pvojy2K314rzjvYzjf2EwLCbw0qRvUzb25MBoSi3gomXdmFvlsXhBOzIiHxrw06i8oHzx1qrqwIvmjWt4aVaFXjnopHzuy5724r/supM5Myzeml3qv4rx1Kbou4bmuYTosoHhyaTipWngoWTmtHvms3rjrXLmsn2yf07OkFf137zsx5bw1KvmsXjoq33uzqTsxpTouojdl1vlZlvswpDy16rDtZrkbFq3jmHhUUXhpmrbHxriX0/lsnrirnf14r/ty6BZPiXouYflsnjmsXvimmZaQSjiqGvipmnhpmn2473msnjovIbtx5nem13w0aRKNCDipWrrw5TsvY7qvokODArhWUnqwI/ip2vemVzlpnTrw5Hjq3Dy17Dihl/xSUPvbl3Nu53gUEPfQDPhpWnlh2nwi3ToiXDouYXt27n03LO1nX3bFBHjlmbaCAnroHXYCAfBs5fWqXXsxZbnwIzjYFPrw5Ddwp3pvYyUaD7On27RpnjXpXDswJTWpG/gsn3lwJHy4Lv037jiaFbdmVzcl1kDAgEEAwIAAACJJzCsAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAALEgAACxIB0t1+/AAAAAd0SU1FB9MKFQolCwe/95QAAAXuSURBVHicrZF5XJJ3HMdVHodmZhcmCqbzRFNRSbGpCHk2tF46y6yQyiup7LDDpSlgpoVmHjNAXi3TWs0Oj8qt0qxJxyhn1LZga1u2tVou290In31/D7j197YPz+/7+x6/75vv83ssjP9B4xMyWhhf/msxgtSg0sbrswEjMRgkBomdBIzBYGdnkIDszLvElJWgwPBSAsljEELCDtYxxQfq0lKBQPBRDmAg+4lBKBQaTDLtQskrvrlEEImakChJAAMQdSWBGRTW1/NwvFco0+Dlg2znMfxdWS8kcCqs3noMLAaG7TxYXw++TOg9Vu89NjhYL6S9pxaoS9WCJ+ilfEA8qjPurDmYwZP1ysp5Y+UyHhWyuI8z7oNhPoPIYL0+VpCRXfU5yMauoqZB/bPKRoGgcct1OmCsQPDn5VSelRWGjZXzqJh3BprGCs1hhaahYpgVKpsyVpgmAzUxZl/fglT5rNNoMc4A8agMBprGW5bB4zF43kSCgTOuYgwMAw8MdpHIOOMMBpWHehi0Hq8tjYBRB+nHLcYVCrGYR1UoFOhuxApvTMwrV5juRpGhOThxN97OcA78iwoxlScWQ0DPrkTDVPGlNMDQaOvXw6LRaIGwiIDY//aJKvLEYhSKaaYTnT38RR1VVR1VUVqE0ev1crn+kvwa2uR6faD8kt5ajrL6TnD1+v5+eScq6C/p+/X6a4HyQDjZL3eNquyo6ujYfoTSh17Kum9oaMh6CJk+a2LvG0LORDRR7YODKI3Ow6P6qnA70qI06dAQYOiguVwOh8XisOIe0ukPdRwiYN6l980jizZDuY9OnyUa37mRPmMr3A5OJv06DzYjWmyvoBw6HTBarbaGy8qNO/m0ixUXqtVe0HFyM/9cGM7q+k4bRtYkaAnNEuE7Z/+0BI9cuzIL9/t5VuTW/WScXVHhESWFKmBcVapuTteO4ODQyazTD1WqC5M53Jrh0Ls61mdrSGRRgkqVo1KpTrHHN6tI5P0znj+fbz//zPLdMe6RRtuYGF+Ka46rK2CSkpK6WN3DsOlYmcFJScM6TkEzRDtYr28kaUR+SYQAM+/MXtyWCFqya+PjD5QY98bXJktRAjA9UimTdTNYer69m3lyTtv5dpjGra1t6grWp2sQRnpZ2vZhG5pGGkYuCZv5/HHErSPx8dtXleDp57KVUunly1LAtLQovxh5tHBPwP1JTyfd3xMQEMcpCJi6Z8Ujzpc98FJ+SqWyRak8xTau7PHNwvEs2wSnA0XfxMcjzDMKdCtbWgBDoVCab+bC1+HkjnwLhjuZU5A5DRzdUgrCUAjNBMxvlOklIg18oNUheXlFgLENMhUpgIkANVsyR6Z1MbnMrpHwe5mcgnvhuUzL8xERYSKRXwQhhHkc9NoGXyfPrHGNTV5eHsJQgkxVwCQjBbWHBs+1PP7m3KnDoXGcuIA5oXMokCYBBpVfSwbM2uXZsfy3QkJSPfBlIS+KYiJhGlMxGTBXmsxyOz3teHBTUztMU9fUlIxSJBGbZCpOFxnX/n4uNeSNFy+KbPH0TYlHfOGDv0PUrjQB5uNtZjXrWKdrtm0DDLcOQpQniTTpTvb29k5TprPHw0IWpC+zWXViNVtjk+h1ewpM02RuBUw1oYbqajcuK7Omurpdx2HWNVQTvzANrimJ3LWrxG+3CF/99Toc3+9RgZM9U2tvV0/ZhS/JJjobGgATa1JK7NLu8JNuKbFucSxuXYop6VQRCRDAeH6eVbJu04JlWRB7eP7ofzv2lm9WZMIPRGNsLGBGzUqLag9wi0obvbE43PKX0bTR0ZSU0Q0PnB48cHd3t7HY9L27xR/FxaknFthYeLnkp6Slvb3b3tfUmfI+YKKj8/OjzYawTxbfAHvU0cW/trDyTuKhfQ4DDsUDoOJiB4fiRAG/NRrq+eY24gGMI6GjaCE5tjq2+vvzvQoFiwgEaMBhYADtDmVnEyu9+HCGOPhPYytgXMzyh2Z+ba1Xobry8J3EvENny8rKHF5V2b7Ew4V8l1fkb+5zAcz/or8Ag3ozZFZX3G0AAAAASUVORK5CYII=', '70', '30');
DROP TABLE IF EXISTS `phplist_urlcache`;
CREATE TABLE `phplist_urlcache` (
  `id` int(11) NOT NULL auto_increment,
  `url` varchar(255) NOT NULL default '',
  `lastmodified` int(11) default NULL,
  `added` datetime default NULL,
  `content` mediumtext,
  PRIMARY KEY  (`id`),
  KEY `urlindex` (`url`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_user_attribute`;
CREATE TABLE `phplist_user_attribute` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `type` varchar(30) default NULL,
  `listorder` int(11) default NULL,
  `default_value` varchar(255) default NULL,
  `required` tinyint(4) default NULL,
  `tablename` varchar(255) default NULL,
  PRIMARY KEY  (`id`),
  KEY `nameindex` (`name`),
  KEY `idnameindex` (`id`,`name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `phplist_user_attribute`(`id`, `name`, `type`, `listorder`, `default_value`, `required`, `tablename`) VALUES ('1', 'Onlinebook', 'textline', '1', '1', '1', 'onlinebook');
DROP TABLE IF EXISTS `phplist_user_blacklist`;
CREATE TABLE `phplist_user_blacklist` (
  `email` varchar(255) NOT NULL default '',
  `added` datetime default NULL,
  UNIQUE KEY `email` (`email`),
  KEY `emailidx` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_user_blacklist_data`;
CREATE TABLE `phplist_user_blacklist_data` (
  `email` varchar(255) NOT NULL default '',
  `name` varchar(100) NOT NULL default '',
  `data` text,
  UNIQUE KEY `email` (`email`),
  KEY `emailidx` (`email`),
  KEY `emailnameidx` (`email`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_user_message_bounce`;
CREATE TABLE `phplist_user_message_bounce` (
  `id` int(11) NOT NULL auto_increment,
  `user` int(11) NOT NULL default '0',
  `message` int(11) NOT NULL default '0',
  `bounce` int(11) NOT NULL default '0',
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`),
  KEY `umbindex` (`user`,`message`,`bounce`),
  KEY `useridx` (`user`),
  KEY `msgidx` (`message`),
  KEY `bounceidx` (`bounce`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_user_message_forward`;
CREATE TABLE `phplist_user_message_forward` (
  `id` int(11) NOT NULL auto_increment,
  `user` int(11) NOT NULL default '0',
  `message` int(11) NOT NULL default '0',
  `forward` varchar(255) default NULL,
  `status` varchar(255) default NULL,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`),
  KEY `usermessageidx` (`user`,`message`),
  KEY `useridx` (`user`),
  KEY `messageidx` (`message`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_user_rss`;
CREATE TABLE `phplist_user_rss` (
  `userid` int(11) NOT NULL default '0',
  `last` datetime default NULL,
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_user_user`;
CREATE TABLE `phplist_user_user` (
  `id` int(11) NOT NULL auto_increment,
  `email` varchar(255) NOT NULL default '',
  `confirmed` tinyint(4) default '0',
  `blacklisted` tinyint(4) default '0',
  `bouncecount` int(11) default '0',
  `entered` datetime default NULL,
  `modified` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `uniqid` varchar(255) default NULL,
  `htmlemail` tinyint(4) default '0',
  `subscribepage` int(11) default NULL,
  `rssfrequency` varchar(100) default NULL,
  `password` varchar(255) default NULL,
  `passwordchanged` date default NULL,
  `disabled` tinyint(4) default '0',
  `extradata` text,
  `foreignkey` varchar(100) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `foreignkey` (`foreignkey`),
  KEY `idx_phplist_user_user_uniqid` (`uniqid`),
  KEY `emailidx` (`email`),
  KEY `enteredindex` (`entered`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `phplist_user_user`(`id`, `email`, `confirmed`, `blacklisted`, `bouncecount`, `entered`, `modified`, `uniqid`, `htmlemail`, `subscribepage`, `rssfrequency`, `password`, `passwordchanged`, `disabled`, `extradata`, `foreignkey`) VALUES ('1', 'anand@tranzmedia.com', '0', '0', '0', '2007-11-06 08:26:22', '2007-11-06 14:26:22', 'cc9acd656bdca9c0c615f1c59f496c91', '0', '', '', '', '2007-11-06', '0', '', '');
DROP TABLE IF EXISTS `phplist_user_user_attribute`;
CREATE TABLE `phplist_user_user_attribute` (
  `attributeid` int(11) NOT NULL default '0',
  `userid` int(11) NOT NULL default '0',
  `value` varchar(255) default NULL,
  PRIMARY KEY  (`attributeid`,`userid`),
  KEY `userindex` (`userid`),
  KEY `attindex` (`attributeid`),
  KEY `userattid` (`attributeid`,`userid`),
  KEY `attuserid` (`userid`,`attributeid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `phplist_user_user_attribute`(`attributeid`, `userid`, `value`) VALUES ('1', '1', '');
DROP TABLE IF EXISTS `phplist_user_user_history`;
CREATE TABLE `phplist_user_user_history` (
  `id` int(11) NOT NULL auto_increment,
  `userid` int(11) NOT NULL default '0',
  `ip` varchar(255) default NULL,
  `date` datetime default NULL,
  `summary` varchar(255) default NULL,
  `detail` text,
  `systeminfo` text,
  PRIMARY KEY  (`id`),
  KEY `userididx` (`userid`),
  KEY `dateidx` (`date`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `phplist_user_user_history`(`id`, `userid`, `ip`, `date`, `summary`, `detail`, `systeminfo`) VALUES ('1', '1', '121.246.66.53', '2007-11-06 08:26:22', 'Update by admin', 'htmlemail = 0
changed from 1

List subscriptions:
Not subscribed to any lists
', '
HTTP_USER_AGENT = Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.0.12) Gecko/20070508 Firefox/1.5.0.12
HTTP_REFERER = http://onlinebookshop.in/list/admin/?page=user
REMOTE_ADDR = 121.246.66.53');
DROP TABLE IF EXISTS `phplist_usermessage`;
CREATE TABLE `phplist_usermessage` (
  `messageid` int(11) NOT NULL default '0',
  `userid` int(11) NOT NULL default '0',
  `entered` datetime NOT NULL default '0000-00-00 00:00:00',
  `viewed` datetime default NULL,
  `status` varchar(255) default NULL,
  PRIMARY KEY  (`userid`,`messageid`),
  KEY `messageidindex` (`messageid`),
  KEY `useridindex` (`userid`),
  KEY `enteredindex` (`entered`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `phplist_userstats`;
CREATE TABLE `phplist_userstats` (
  `id` int(11) NOT NULL auto_increment,
  `unixdate` int(11) default NULL,
  `item` varchar(255) default NULL,
  `listid` int(11) default '0',
  `value` int(11) default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `entry` (`unixdate`,`item`,`listid`),
  KEY `dateindex` (`unixdate`),
  KEY `itemindex` (`item`),
  KEY `listindex` (`listid`),
  KEY `listdateindex` (`listid`,`unixdate`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `publishermaster`;
CREATE TABLE `publishermaster` (
  `PUB_ID` bigint(20) NOT NULL auto_increment,
  `PUB_NAME` varchar(200) NOT NULL default '',
  `PUB_DESC` text NOT NULL,
  PRIMARY KEY  (`PUB_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO `publishermaster`(`PUB_ID`, `PUB_NAME`, `PUB_DESC`) VALUES ('2', 'Tata McGraw-Hill', '');
INSERT INTO `publishermaster`(`PUB_ID`, `PUB_NAME`, `PUB_DESC`) VALUES ('5', 'Oxford India', '');
INSERT INTO `publishermaster`(`PUB_ID`, `PUB_NAME`, `PUB_DESC`) VALUES ('6', 'Hind Law Publishers', '<font color=\\\"#ff00ff\\\">fgbdfghdgf</font>');
INSERT INTO `publishermaster`(`PUB_ID`, `PUB_NAME`, `PUB_DESC`) VALUES ('7', 'Wadhwa & Company, Nagpur', '');
INSERT INTO `publishermaster`(`PUB_ID`, `PUB_NAME`, `PUB_DESC`) VALUES ('8', 'Pearson Education', '');
INSERT INTO `publishermaster`(`PUB_ID`, `PUB_NAME`, `PUB_DESC`) VALUES ('9', 'LexisNexis Butterworths', '');
INSERT INTO `publishermaster`(`PUB_ID`, `PUB_NAME`, `PUB_DESC`) VALUES ('13', 'Wadhwa Nagpur', '');
INSERT INTO `publishermaster`(`PUB_ID`, `PUB_NAME`, `PUB_DESC`) VALUES ('12', 'Pen Books', '');
INSERT INTO `publishermaster`(`PUB_ID`, `PUB_NAME`, `PUB_DESC`) VALUES ('14', 'Oxford University Press', '');
INSERT INTO `publishermaster`(`PUB_ID`, `PUB_NAME`, `PUB_DESC`) VALUES ('15', 'Sage Publishers Private Limited', '');
INSERT INTO `publishermaster`(`PUB_ID`, `PUB_NAME`, `PUB_DESC`) VALUES ('16', 'Universal Law Publishing Co', '');
DROP TABLE IF EXISTS `relatedbook`;
CREATE TABLE `relatedbook` (
  `rel_id` bigint(20) NOT NULL auto_increment,
  `rel_masterbook` bigint(20) NOT NULL default '0',
  `re_book` bigint(20) NOT NULL default '0',
  PRIMARY KEY  (`rel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO `relatedbook`(`rel_id`, `rel_masterbook`, `re_book`) VALUES ('12', '46', '46');
INSERT INTO `relatedbook`(`rel_id`, `rel_masterbook`, `re_book`) VALUES ('11', '7', '12');
INSERT INTO `relatedbook`(`rel_id`, `rel_masterbook`, `re_book`) VALUES ('10', '7', '11');
INSERT INTO `relatedbook`(`rel_id`, `rel_masterbook`, `re_book`) VALUES ('13', '47', '47');
INSERT INTO `relatedbook`(`rel_id`, `rel_masterbook`, `re_book`) VALUES ('14', '47', '46');
INSERT INTO `relatedbook`(`rel_id`, `rel_masterbook`, `re_book`) VALUES ('15', '47', '15');
DROP TABLE IF EXISTS `specialoffer`;
CREATE TABLE `specialoffer` (
  `SP_ID` bigint(20) NOT NULL auto_increment,
  `SP_BOOK_ID` bigint(20) NOT NULL default '0',
  `SP_IMAGE` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`SP_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `subjectmaster`;
CREATE TABLE `subjectmaster` (
  `SUB_ID` bigint(20) NOT NULL auto_increment,
  `SUB_NAME` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`SUB_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `subjectmaster`(`SUB_ID`, `SUB_NAME`) VALUES ('1', 'Computers');
INSERT INTO `subjectmaster`(`SUB_ID`, `SUB_NAME`) VALUES ('2', 'Science');
INSERT INTO `subjectmaster`(`SUB_ID`, `SUB_NAME`) VALUES ('3', 'Stock / Shares');
INSERT INTO `subjectmaster`(`SUB_ID`, `SUB_NAME`) VALUES ('4', 'Litrature');
INSERT INTO `subjectmaster`(`SUB_ID`, `SUB_NAME`) VALUES ('5', 'Business');
DROP TABLE IF EXISTS `userdetails`;
CREATE TABLE `userdetails` (
  `USER_ID` bigint(20) NOT NULL auto_increment,
  `USER_FNAME` varchar(100) NOT NULL default '',
  `USER_LNAME` varchar(100) NOT NULL default '',
  `USER_HNAME` varchar(100) NOT NULL default '',
  `USER_STREET` varchar(100) NOT NULL default '',
  `USER_CITY` varchar(100) NOT NULL default '',
  `USER_STATE` varchar(100) NOT NULL default '',
  `USER_COUNTRY` varchar(100) NOT NULL default '',
  `USER_ZIP` varchar(100) NOT NULL default '',
  `USER_TELEPHONE` varchar(100) NOT NULL default '',
  `USER_EMAIL` varchar(100) default NULL,
  `USER_PASSWORD` varchar(100) default NULL,
  `USER_LASTLOGIN` datetime NOT NULL default '0000-00-00 00:00:00',
  `USER_CRDATE` datetime NOT NULL default '0000-00-00 00:00:00',
  `USER_MDDATE` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`USER_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO `userdetails`(`USER_ID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_PASSWORD`, `USER_LASTLOGIN`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('1', 'asdsad', 'asd', 'asdas', 'asdas', 'asdasdasd', 'West Bengal', 'asdasd', '1312', '13123', 'dfsdf@sdfs.com', '123', '2007-05-28 03:32:56', '2007-05-28 03:32:56', '2007-05-28 03:32:56');
INSERT INTO `userdetails`(`USER_ID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_PASSWORD`, `USER_LASTLOGIN`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('2', 'dfasdf', 'asdasd', 'adsasd', 'asdasd', 'asdasdasd', 'Tripura', 'adsasdasdas', '12321', '123123', 'qweqw@xcvb.com', '123', '2007-05-28 03:33:43', '2007-05-28 03:33:43', '2007-05-28 03:33:43');
INSERT INTO `userdetails`(`USER_ID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_PASSWORD`, `USER_LASTLOGIN`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('3', 'sdfsd', 'sdfs', 'asdasda', 'asdasd', 'asdasd', 'Uttar Pradesh', 'qeqw', '12312', '12312', 'hari@jj.com', '123', '2007-05-28 03:42:34', '2007-05-28 03:42:34', '2007-05-28 03:42:34');
INSERT INTO `userdetails`(`USER_ID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_PASSWORD`, `USER_LASTLOGIN`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('4', 'sdfsd', 'sdfs', 'asdasda', 'asdasd', 'asdasd', 'Tripura', 'qeqw', '12312', '12312', 'gg@jj.com', '123', '2007-05-28 03:44:08', '2007-05-28 03:44:08', '2007-05-28 03:44:08');
INSERT INTO `userdetails`(`USER_ID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_PASSWORD`, `USER_LASTLOGIN`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('5', 'Hari', 'N g', 'jdgfkjldgf', 'kgdskh', 'dkgf', 'Andhra Pradesh', 'dsfdsf', '132123', '123123', 'ANAND@GMAIL.com', '123', '2007-05-28 21:34:49', '2007-05-28 21:34:49', '2007-05-28 21:34:49');
INSERT INTO `userdetails`(`USER_ID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_PASSWORD`, `USER_LASTLOGIN`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('6', 'Dinu', 'K', 'mnbdsf', 'hgftsf', 'jhgjhdsf', 'Andhra Pradesh', 'DFGHKJDGF', '4322', '351325', 'ASD@ABC.COM', '123', '2007-05-28 23:09:17', '2007-05-28 23:09:17', '2007-05-28 23:09:17');
INSERT INTO `userdetails`(`USER_ID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_PASSWORD`, `USER_LASTLOGIN`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('7', 'Nimish', 'Thamoa', 'fkjldsfkjl', 'kjdsf', 'jhdgfh', 'Andhra Pradesh', 'ejhtre', '13212', '23423', 'qwer@tyu.iop', '123', '2007-05-28 23:16:09', '2007-05-28 23:16:09', '2007-05-28 23:16:09');
INSERT INTO `userdetails`(`USER_ID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_PASSWORD`, `USER_LASTLOGIN`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('8', 'Anand', 'Raju', 'Manalil', 'Vattappara', 'Santhanpara', 'Kerala', 'India', '685619', '9446533433', 'raju_anandu@yahoo.com', '123', '2007-06-01 02:01:48', '2007-06-01 02:01:48', '2007-06-01 02:01:48');
INSERT INTO `userdetails`(`USER_ID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_PASSWORD`, `USER_LASTLOGIN`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('9', 'Hari', 'Vinod', 'Muraliravam', 'Mathribhumi', 'Cochin', 'Kerala', 'India', '685619', '9446533433', 'hari@yahoo.com', '123', '2007-06-01 02:16:52', '2007-06-01 02:16:52', '2007-06-01 02:16:52');
INSERT INTO `userdetails`(`USER_ID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_PASSWORD`, `USER_LASTLOGIN`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('10', 'Ambili', 'Raju', 'Manalil', 'Thammanam', 'Cochin', 'Kerala', '1', '685619', '8735879435897', 'ambili@gmail.com', '123', '2007-07-15 15:50:39', '2007-07-15 15:50:39', '2007-07-15 15:50:39');
INSERT INTO `userdetails`(`USER_ID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_PASSWORD`, `USER_LASTLOGIN`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('11', 'khjkjhkjh', 'kjhkjh', 'khjkhkjhkjh', 'kjhkjhjkhkjh', 'khkjh', 'hkjhjkhkj', '1', '97987987', '987987987', 'qwerty@qwerty.com', 'qwerty', '2008-01-04 00:32:40', '2008-01-04 00:32:40', '2008-01-04 00:32:40');
INSERT INTO `userdetails`(`USER_ID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_PASSWORD`, `USER_LASTLOGIN`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('12', 'ANVARALI', 'POTTAMMAL', '402', 'MUSSAFAH INDS AERA', 'ABU DHABI', 'ABUDHABI', '4', '8865', '00971505461389', 'sangeeth@imcc.ae', '150395', '2008-04-20 04:09:24', '2008-04-20 04:09:24', '2008-04-20 04:09:24');
INSERT INTO `userdetails`(`USER_ID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_PASSWORD`, `USER_LASTLOGIN`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('13', 'archana', 'sekhar', 'vilayath', 'choondapalam', 'kalpata', 'kerala', '1', '684678', '0465 793456', 'rchn_sekhar@yahoo.co.in', 'anarch', '2008-06-07 07:12:52', '2008-06-07 07:12:52', '2008-06-07 07:12:52');
INSERT INTO `userdetails`(`USER_ID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_PASSWORD`, `USER_LASTLOGIN`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('14', 'dr.priya', 'peethambar', 'SREE PARVATHY', 'VARAPUZHA', 'cochin', 'kerala', '1', '683101', '09970102628', 'drpriyapeethambar@gmail.com', 'sreeparvathy', '2008-06-07 16:11:46', '2008-06-07 16:11:46', '2008-06-07 16:11:46');
INSERT INTO `userdetails`(`USER_ID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_PASSWORD`, `USER_LASTLOGIN`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('15', 'Judah', 'Steve', 'Randall', 'Devyn', 'Aubrey', 'Sincere', '2', 'Jerrell', 'Quincy', 'adalberto@e-mailanywhere.com', '', '2008-07-10 22:04:33', '2008-07-10 22:04:33', '2008-07-10 22:04:33');
DROP TABLE IF EXISTS `userpurchase`;
CREATE TABLE `userpurchase` (
  `PUR_ID` bigint(20) NOT NULL auto_increment,
  `PUR_USER` bigint(20) NOT NULL default '0',
  `PUR_AMOUNT` decimal(10,0) NOT NULL default '0',
  `PUR_DATE` datetime NOT NULL default '0000-00-00 00:00:00',
  `PUR_DELIVARY` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`PUR_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

INSERT INTO `userpurchase`(`PUR_ID`, `PUR_USER`, `PUR_AMOUNT`, `PUR_DATE`, `PUR_DELIVARY`) VALUES ('14', '1', '4684', '2007-05-28 21:24:12', '0');
INSERT INTO `userpurchase`(`PUR_ID`, `PUR_USER`, `PUR_AMOUNT`, `PUR_DATE`, `PUR_DELIVARY`) VALUES ('15', '7', '2342', '2007-05-28 23:17:02', '0');
INSERT INTO `userpurchase`(`PUR_ID`, `PUR_USER`, `PUR_AMOUNT`, `PUR_DATE`, `PUR_DELIVARY`) VALUES ('16', '5', '300', '2007-05-29 00:28:44', '0');
INSERT INTO `userpurchase`(`PUR_ID`, `PUR_USER`, `PUR_AMOUNT`, `PUR_DATE`, `PUR_DELIVARY`) VALUES ('17', '5', '8751', '2007-05-29 01:02:33', '0');
INSERT INTO `userpurchase`(`PUR_ID`, `PUR_USER`, `PUR_AMOUNT`, `PUR_DATE`, `PUR_DELIVARY`) VALUES ('18', '8', '2', '2007-06-01 02:01:57', '0');
INSERT INTO `userpurchase`(`PUR_ID`, `PUR_USER`, `PUR_AMOUNT`, `PUR_DATE`, `PUR_DELIVARY`) VALUES ('19', '9', '4250', '2007-06-01 02:16:57', '0');
INSERT INTO `userpurchase`(`PUR_ID`, `PUR_USER`, `PUR_AMOUNT`, `PUR_DATE`, `PUR_DELIVARY`) VALUES ('20', '8', '2', '2007-06-02 09:38:42', '0');
INSERT INTO `userpurchase`(`PUR_ID`, `PUR_USER`, `PUR_AMOUNT`, `PUR_DATE`, `PUR_DELIVARY`) VALUES ('21', '8', '2', '2007-06-15 03:08:42', '0');
INSERT INTO `userpurchase`(`PUR_ID`, `PUR_USER`, `PUR_AMOUNT`, `PUR_DATE`, `PUR_DELIVARY`) VALUES ('22', '8', '2', '2007-06-30 19:29:13', '0');
INSERT INTO `userpurchase`(`PUR_ID`, `PUR_USER`, `PUR_AMOUNT`, `PUR_DATE`, `PUR_DELIVARY`) VALUES ('23', '8', '225', '2007-07-07 10:56:02', '0');
INSERT INTO `userpurchase`(`PUR_ID`, `PUR_USER`, `PUR_AMOUNT`, `PUR_DATE`, `PUR_DELIVARY`) VALUES ('24', '8', '225', '2007-07-15 10:58:02', '0');
INSERT INTO `userpurchase`(`PUR_ID`, `PUR_USER`, `PUR_AMOUNT`, `PUR_DATE`, `PUR_DELIVARY`) VALUES ('25', '8', '225', '2007-07-15 10:59:53', '0');
INSERT INTO `userpurchase`(`PUR_ID`, `PUR_USER`, `PUR_AMOUNT`, `PUR_DATE`, `PUR_DELIVARY`) VALUES ('26', '8', '225', '2007-07-15 14:36:46', '0');
INSERT INTO `userpurchase`(`PUR_ID`, `PUR_USER`, `PUR_AMOUNT`, `PUR_DATE`, `PUR_DELIVARY`) VALUES ('27', '10', '5720', '2007-07-15 15:51:13', '0');
INSERT INTO `userpurchase`(`PUR_ID`, `PUR_USER`, `PUR_AMOUNT`, `PUR_DATE`, `PUR_DELIVARY`) VALUES ('28', '11', '23', '2008-01-04 00:32:50', '0');
INSERT INTO `userpurchase`(`PUR_ID`, `PUR_USER`, `PUR_AMOUNT`, `PUR_DATE`, `PUR_DELIVARY`) VALUES ('29', '13', '1', '2008-06-07 07:21:09', '0');
DROP TABLE IF EXISTS `userpurchaseitems`;
CREATE TABLE `userpurchaseitems` (
  `UPIT_ID` bigint(20) NOT NULL auto_increment,
  `UPIT_USPRID` bigint(20) NOT NULL default '0',
  `UPIT_ITEM` bigint(20) NOT NULL default '0',
  `UPIT_QTY` bigint(20) NOT NULL default '0',
  `UPIT_PRICE` bigint(4) default NULL,
  PRIMARY KEY  (`UPIT_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO `userpurchaseitems`(`UPIT_ID`, `UPIT_USPRID`, `UPIT_ITEM`, `UPIT_QTY`, `UPIT_PRICE`) VALUES ('1', '14', '8', '2', '2342');
INSERT INTO `userpurchaseitems`(`UPIT_ID`, `UPIT_USPRID`, `UPIT_ITEM`, `UPIT_QTY`, `UPIT_PRICE`) VALUES ('2', '15', '8', '1', '2342');
INSERT INTO `userpurchaseitems`(`UPIT_ID`, `UPIT_USPRID`, `UPIT_ITEM`, `UPIT_QTY`, `UPIT_PRICE`) VALUES ('3', '16', '7', '1', '300');
INSERT INTO `userpurchaseitems`(`UPIT_ID`, `UPIT_USPRID`, `UPIT_ITEM`, `UPIT_QTY`, `UPIT_PRICE`) VALUES ('4', '17', '8', '3', '2342');
INSERT INTO `userpurchaseitems`(`UPIT_ID`, `UPIT_USPRID`, `UPIT_ITEM`, `UPIT_QTY`, `UPIT_PRICE`) VALUES ('5', '17', '5', '4', '400');
INSERT INTO `userpurchaseitems`(`UPIT_ID`, `UPIT_USPRID`, `UPIT_ITEM`, `UPIT_QTY`, `UPIT_PRICE`) VALUES ('6', '17', '6', '1', '125');
INSERT INTO `userpurchaseitems`(`UPIT_ID`, `UPIT_USPRID`, `UPIT_ITEM`, `UPIT_QTY`, `UPIT_PRICE`) VALUES ('7', '19', '3', '2', '2125');
INSERT INTO `userpurchaseitems`(`UPIT_ID`, `UPIT_USPRID`, `UPIT_ITEM`, `UPIT_QTY`, `UPIT_PRICE`) VALUES ('8', '23', '8', '1', '225');
INSERT INTO `userpurchaseitems`(`UPIT_ID`, `UPIT_USPRID`, `UPIT_ITEM`, `UPIT_QTY`, `UPIT_PRICE`) VALUES ('9', '24', '8', '1', '225');
INSERT INTO `userpurchaseitems`(`UPIT_ID`, `UPIT_USPRID`, `UPIT_ITEM`, `UPIT_QTY`, `UPIT_PRICE`) VALUES ('10', '25', '7', '1', '225');
INSERT INTO `userpurchaseitems`(`UPIT_ID`, `UPIT_USPRID`, `UPIT_ITEM`, `UPIT_QTY`, `UPIT_PRICE`) VALUES ('11', '26', '7', '1', '225');
INSERT INTO `userpurchaseitems`(`UPIT_ID`, `UPIT_USPRID`, `UPIT_ITEM`, `UPIT_QTY`, `UPIT_PRICE`) VALUES ('12', '27', '11', '4', '1430');
INSERT INTO `userpurchaseitems`(`UPIT_ID`, `UPIT_USPRID`, `UPIT_ITEM`, `UPIT_QTY`, `UPIT_PRICE`) VALUES ('13', '28', '60', '1', '23');
INSERT INTO `userpurchaseitems`(`UPIT_ID`, `UPIT_USPRID`, `UPIT_ITEM`, `UPIT_QTY`, `UPIT_PRICE`) VALUES ('14', '29', '55', '1', '1');
DROP TABLE IF EXISTS `usershipingdetails`;
CREATE TABLE `usershipingdetails` (
  `USER_SHIPID` bigint(20) NOT NULL auto_increment,
  `USER_PURID` bigint(20) NOT NULL default '0',
  `USER_FNAME` varchar(100) NOT NULL default '',
  `USER_LNAME` varchar(100) NOT NULL default '',
  `USER_HNAME` varchar(100) NOT NULL default '',
  `USER_STREET` varchar(100) NOT NULL default '',
  `USER_CITY` varchar(100) NOT NULL default '',
  `USER_STATE` varchar(100) NOT NULL default '',
  `USER_COUNTRY` varchar(100) NOT NULL default '',
  `USER_ZIP` varchar(100) NOT NULL default '',
  `USER_TELEPHONE` varchar(100) NOT NULL default '',
  `USER_EMAIL` varchar(100) default NULL,
  `USER_CRDATE` datetime NOT NULL default '0000-00-00 00:00:00',
  `USER_MDDATE` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`USER_SHIPID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO `usershipingdetails`(`USER_SHIPID`, `USER_PURID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('4', '14', 'asdsad', 'asd', 'asdas', 'asdas', 'asdasdasd', 'West Bengal', 'asdasd', '1312', '13123', 'dfsdf@sdfs.com', '2007-05-28 21:24:12', '2007-05-28 21:24:12');
INSERT INTO `usershipingdetails`(`USER_SHIPID`, `USER_PURID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('5', '15', 'Nimish', 'Thamoa', 'fkjldsfkjl', 'kjdsf', 'jhdgfh', 'Andhra Pradesh', 'ejhtre', '13212', '23423', 'qwer@tyu.iop', '2007-05-28 23:17:02', '2007-05-28 23:17:02');
INSERT INTO `usershipingdetails`(`USER_SHIPID`, `USER_PURID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('6', '16', 'Hari', 'N g', 'jdgfkjldgf', 'kgdskh', 'dkgf', 'Andhra Pradesh', 'dsfdsf', '132123', '123123', 'ANAND@GMAIL.com', '2007-05-29 00:28:44', '2007-05-29 00:28:44');
INSERT INTO `usershipingdetails`(`USER_SHIPID`, `USER_PURID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('7', '17', 'Hari', 'N g', 'jdgfkjldgf', 'kgdskh', 'dkgf', 'Andhra Pradesh', 'dsfdsf', '132123', '123123', 'ANAND@GMAIL.com', '2007-05-29 01:02:34', '2007-05-29 01:02:34');
INSERT INTO `usershipingdetails`(`USER_SHIPID`, `USER_PURID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('8', '18', 'Anand', 'Raju', 'Manalil', 'Vattappara', 'Santhanpara', 'Kerala', 'India', '685619', '9446533433', 'raju_anandu@yahoo.com', '2007-06-01 02:01:57', '2007-06-01 02:01:57');
INSERT INTO `usershipingdetails`(`USER_SHIPID`, `USER_PURID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('9', '19', 'Hari', 'Vinod', 'Muraliravam', 'Mathribhumi', 'Cochin', 'Kerala', 'India', '685619', '9446533433', 'hari@yahoo.com', '2007-06-01 02:16:58', '2007-06-01 02:16:58');
INSERT INTO `usershipingdetails`(`USER_SHIPID`, `USER_PURID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('10', '20', 'Anand', 'Raju', 'Manalil', 'Vattappara', 'Santhanpara', 'Kerala', 'India', '685619', '9446533433', 'raju_anandu@yahoo.com', '2007-06-02 09:38:42', '2007-06-02 09:38:42');
INSERT INTO `usershipingdetails`(`USER_SHIPID`, `USER_PURID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('11', '21', 'Anand', 'Raju', 'Manalil', 'Vattappara', 'Santhanpara', 'Kerala', 'India', '685619', '9446533433', 'raju_anandu@yahoo.com', '2007-06-15 03:08:42', '2007-06-15 03:08:42');
INSERT INTO `usershipingdetails`(`USER_SHIPID`, `USER_PURID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('12', '22', 'Anand', 'Raju', 'Manalil', 'Vattappara', 'Santhanpara', 'Kerala', 'India', '685619', '9446533433', 'raju_anandu@yahoo.com', '2007-06-30 19:29:14', '2007-06-30 19:29:14');
INSERT INTO `usershipingdetails`(`USER_SHIPID`, `USER_PURID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('13', '23', 'Anand', 'Raju', 'Manalil', 'Vattappara', 'Santhanpara', 'Kerala', 'India', '685619', '9446533433', 'raju_anandu@yahoo.com', '2007-07-07 10:56:02', '2007-07-07 10:56:02');
INSERT INTO `usershipingdetails`(`USER_SHIPID`, `USER_PURID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('14', '24', 'Anand', 'Raju', 'Manalil', 'Vattappara', 'Santhanpara', 'Kerala', 'India', '685619', '9446533433', 'raju_anandu@yahoo.com', '2007-07-15 10:58:02', '2007-07-15 10:58:02');
INSERT INTO `usershipingdetails`(`USER_SHIPID`, `USER_PURID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('15', '25', 'Anand', 'Raju', 'Manalil', 'Vattappara', 'Santhanpara', 'Kerala', 'India', '685619', '9446533433', 'raju_anandu@yahoo.com', '2007-07-15 10:59:53', '2007-07-15 10:59:53');
INSERT INTO `usershipingdetails`(`USER_SHIPID`, `USER_PURID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('16', '26', 'Anand', 'Raju', 'Manalil', 'Vattappara', 'Santhanpara', 'Kerala', 'India', '685619', '9446533433', 'raju_anandu@yahoo.com', '2007-07-15 14:36:46', '2007-07-15 14:36:46');
INSERT INTO `usershipingdetails`(`USER_SHIPID`, `USER_PURID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('17', '28', 'khjkjhkjh', 'kjhkjh', 'khjkhkjhkjh', 'kjhkjhjkhkjh', 'khkjh', 'hkjhjkhkj', '1', '97987987', '987987987', 'qwerty@qwerty.com', '2008-01-04 00:32:50', '2008-01-04 00:32:50');
INSERT INTO `usershipingdetails`(`USER_SHIPID`, `USER_PURID`, `USER_FNAME`, `USER_LNAME`, `USER_HNAME`, `USER_STREET`, `USER_CITY`, `USER_STATE`, `USER_COUNTRY`, `USER_ZIP`, `USER_TELEPHONE`, `USER_EMAIL`, `USER_CRDATE`, `USER_MDDATE`) VALUES ('18', '29', 'archana', 'sekhar', 'vilayath', 'choondapalam', 'kalpata', 'kerala', '1', '684678', '0465 793456', 'rchn_sekhar@yahoo.co.in', '2008-06-07 07:21:09', '2008-06-07 07:21:09');
#---------------------------------------------------------------------------------

