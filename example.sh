#!/bin/bash

clear
echo "#####################################################
#         REGISTRATION FORM 			   #
#####################################################" 

read -p "Enter First Name   : " fname
read -p "Last Name:" lName
read -p "DOB :" dob
read -p "Address :" address

echo  "____________USER INFORMATION_____________________"
echo "Full Name - "$fname + $lName
echo "Date Of Birth - " $dob
echo "Address -" $address

exit


#clear 

