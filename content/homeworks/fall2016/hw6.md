---
date: "2016-10-13"
title: "Homework #6"

course: "Systems Security - Fall 2016"
due: "October 20, 2016 @ 6:00PM"
active: false
---

## Preface
During the [Windows](/lectures/fall2016/windows) lecture, you learned about Windows Server, as well as Active Directory.
Take your skills to the next level, and actually build your own Windows Server, with Active Directory.

## Requirements
### **IMPORTANT**: DO THIS FIRST
Due to some issues with our virtualization software, you will need to change all the IPs of all the machines you are in control of.
Your new IP addresses are:

* pfSense: `192.168.0.{100 + Your Team #}`
* Internal Subnet: `10.42.{Your Team #}.0/24`

For example, if you were Team #1, your IP address would look like:

* pfSense: `192.168.0.101`
* Internal Subnet: `10.42.1.0/24`

### **IMPORTANT**: DO THIS SECOND
Please include all credentials to your Virtual Machines in your submission document (it can be a separate email).
This is to ensure we can fix any issues that arise in the future.

### Windows Server Setup
* Setup Windows 2012 R2 on your Virtual Machine called `Windows Server`
    * When setting up, use the trial key localted [here](http://blog.techygeekshome.info/2015/04/windows-server-2012-r2-evaluation-activation/)
* On `Window Server`, setup Active Directory.  Name it however you want.
* Create two users on the Active Directory instance on `Windows Server`.
* Join your `Windows Client` to the Active Directory you just created.

## Submission
As always, ensure you document (with screenshots) the steps you took do complete "Windows Server Setup". 
You will then email the documentation to `ubnetdef -at- buffalo.edu`.
This is due by **October 19, 2016 at 6:00PM**.