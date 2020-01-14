# README

cusbulletin is a Ruby on Rails Web Application that is deployed on Heroku. 

The purpose of the application is to connect employees within an organization to work related information. It 
is intended to enhance communication and eventually phase out the consumption of resources required to print and deliver internal Memos.
Professional development within the organization is critical, hence the reason a MS Excel online Tutorial/Course has
been added included. Other courses will be included in the future. In addition to the courses, quizzletts will be 
added that will allow the users to test their knowledge of the lessons learnt. Grades will be submitted to a table and stored in the database. Admin can then use these grades to incentivise their employees in vaious ways.  

The application is also intended to automate existing manual business processes and 
centralize data that is not captured in the organization's Enterprise system. This is very valuable when trying to improve
effeciency, security, integrity, accessibility and data analysis within the various operations of the organization.

cusbulletin provides a web portal with multiple forms for data input into 
related tables that represents a single database.
 
The following outlines some of the operations that have been automated or those that are expepcted to be automated:

* Managing the procurement and consumption of toners at all stations country-wide
	* Regular users can create and submit a requisition for a toner(s). They can only view requisitions made from their station.
	* Only admin can issue a toner. This is done by editing the required fields to issue the toner. Those
          fields are on the same table as the fields to request the toner, but they are only visible to administrators.

* Managing the Temporary Importation of vehicles into the country.
	* Vehicles that enter the country have to be documented. Data has to be collected and recorded. Restrictions have to be given and monitored.

* Managing the rotation of cargo in the Cargo section



Things you may want to cover......will be edit very soon:

* ruby 2.6.3p62 (2019-04-16 revision 67580)

* System dependencies

* Configuration

* Database creation

* Database initialization

* How to run the test suite

* Services (job queues, cache servers, search engines, etc.)

* Deployment instructions

* ...
