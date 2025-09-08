Regalia Type table
Id Int Auto
RegaliaType Text

Peerage Table
Id Int Auto
Peearage Text

Person table
Id Int Auto
Name Text

Regalia Table
Id Int Auto
RegaliaTypeID Int Foreign

User Table
Id Int Auto
Name Text
email
Password

History Table
Id Int Auto
RegaliaId Int Foreign
PersonId Int Foreign
PeerageId Int Forgein Key
Date DateTime
Notes
