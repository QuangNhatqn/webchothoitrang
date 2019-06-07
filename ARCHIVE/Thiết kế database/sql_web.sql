CREATE DATABASE WEB
GO
USE WEB
GO


CREATE TABLE USERs
(
 UserIDs int IDENTITY(1,1) not null,
 UserNames varchar(20),
 PhoneNumbers int,
 Passwords varchar(40),
 ParticipateDates smalldatetime,
 Coins money, 
 UserTypes int
 )
 ALTER TABLE USERs ADD
 CONSTRAINT USERs_UserIDs_PK PRIMARY KEY(UserIDs)

 CREATE TABLE COINTRADINGs
(
 CTIDs int IDENTITY(1,1) not null,
 UserIDs int,
 Valuess money,
 TransactionTimes smalldatetime
 )
 ALTER TABLE COINTRADINGs ADD
 CONSTRAINT COINTRADINGs_CTIDs_PK PRIMARY KEY(CTIDs),
 CONSTRAINT COINTRADINGs_UserIDs_FK FOREIGN KEY(UserIDs) REFERENCES USERs(UserIDs)

 CREATE TABLE POSTINGs
(
 PostingIDs int IDENTITY(1,1) not null,
 UserIDs int,
 Categorys varchar (100),
 Type1s varchar(50),
 Type2s varchar(50),
 Addresss varchar(100),
 URLImages varchar(100),
 Conditions varchar(50),
 Titles varchar(100),
 Details varchar(50),
 Transportations varchar(30),
 Emails varchar(30),
 PostTimes smalldatetime,
 Statuss varchar(100)
 )
 ALTER TABLE POSTINGs ADD
 CONSTRAINT POSTINGs_PostingIDs_PK PRIMARY KEY(PostingIDs),
 CONSTRAINT POSTINGs_UserIDs_FK FOREIGN KEY(UserIDs) REFERENCES USERs(UserIDs)

  CREATE TABLE SERVICESs
(
 ServiceIDs int IDENTITY(1,1) not null,
 Typess varchar(50),
 ServiceCosts money
 )
 ALTER TABLE SERVICESs ADD
 CONSTRAINT SERVICESs_ServiceIDs_PK PRIMARY KEY(ServiceIDs)

  CREATE TABLE SERVICETRADINGs
(
 ServiceIDs int not null,
 PostingIDs int not null,
 TransactionTimes smalldatetime,
 ExecutionTimes smalldatetime

 )
 ALTER TABLE SERVICETRADINGs ADD
 CONSTRAINT SERVICETRADINGs_ServiceIDs_PostingIDs_PK PRIMARY KEY(ServiceIDs,PostingIDs),
 CONSTRAINT SERVICETRADINGs_ServiceIDs_FK FOREIGN KEY(ServiceIDs) REFERENCES SERVICESs (ServiceIDs),
 CONSTRAINT SERVICETRADINGs_PostingIDs_FK FOREIGN KEY(PostingIDs) REFERENCES POSTINGs(PostingIDs)


