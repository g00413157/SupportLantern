Here are the updated IT support ticket details with names included before each title:  

1. Alice Johnson
   Title: Computer Won't Start  
   Description: Alice reports that her desktop computer is unresponsive after pressing the power button.  
   Priority: High  
   Status: Open  

2. John Smith
   Title: Email Not Sending  
   Description: John’s emails are stuck in the Outbox. SMTP error displayed.  
   Priority: Medium  
   Status: In Progress  

3. Michael Brown
   Title: Slow Network Connection  
   Description: Michael reports extremely slow internet speed across the office network.  
   Priority: High  
   Status: Open  

4. Emma Williams
   Title: Forgotten Password Reset  
   Description: Emma forgot her email password and requires a reset.  
   Priority: Low  
   Status: Resolved  

5. Sarah Davis
   Title: Printer Offline  
   Description: Sarah says the office printer is showing "offline" and not responding.  
   Priority: Medium  
   Status: Open  

6. Olivia Miller
   Title: Software Installation Request  
   Description: Olivia requests Adobe Photoshop installation for the marketing team.  
   Priority: Low  
   Status: Pending Approval  

7. Daniel Garcia
   Title: Laptop Overheating  
   Description: Daniel reports his laptop becomes extremely hot during use and shuts down.  
   Priority: High  
   Status: Open  

8. Sophia Wilson
   Title: VPN Connection Failure  
   Description: Sophia cannot connect to the VPN remotely. Error: "VPN server unreachable."  
   Priority: High  
   Status: In Progress  

9. James Taylor
   Title: Monitor Display Flickering  
   Description: James’s screen flickers intermittently when using the docking station.  
   Priority: Medium  
   Status: Open  

10. Isabella Martinez
    Title: Shared Drive Access Denied  
    Description: Isabella cannot access shared folders on the network.  
    Priority: Medium  
    Status: In Progress  

11. David Thompson 
    Title: Malware Detected on PC  
    Description: David’s antivirus flagged malware during a routine scan.  
    Priority: Critical  
    Status: Open  

12. Charlotte Evans  
    Title: Lost Access Card  
    Description: Charlotte lost her access card and cannot enter the building.  
    Priority: Medium  
    Status: Resolved  

13. Benjamin White
    Title: Application Crashing Repeatedly  
    Description: Benjamin reports that a finance app crashes when opening specific reports.  
    Priority: High  
    Status: Open  

14. Amelia Harris 
    Title: Bluetooth Devices Not Connecting  
    Description: Amelia is unable to connect Bluetooth headphones to her laptop.  
    Priority: Low  
    Status: Pending  

15. Ethan Lewis
    Title: Phone System Down  
    Description: Ethan reports the VoIP phone system is not operational for all employees.  
    Priority: Critical  
    Status: Open  

16. Grace Robinson 
    Title: Dual Monitor Setup Request  
    Description: Grace requested an additional monitor for her workstation.  
    Priority: Low  
    Status: Pending  

17. Liam Hall 
    Title: Database Access Request  
    Description: Liam requires access to the company’s internal database as a new hire.  
    Priority: Medium  
    Status: Open  

18. Mia Young
    Title: Keyboard Keys Not Working  
    Description: Mia reports that several keys on her keyboard are unresponsive.  
    Priority: Medium  
    Status: In Progress  

19. Noah Scott
    Title: Unable to Download Attachments  
    Description: Noah cannot download email attachments; browser shows "blocked" message.  
    Priority: Low  
    Status: Resolved  

20. Harper King  
    Title: Operating System Update Failure  
    Description: Harper reports that Windows updates fail with error code 0x80070005.  
    Priority: Medium  
    Status: Open  

Let me know if you need further adjustments!

INSERT INTO `tickets` (`title`, `description`, `contact_id`, `priority_id`, `status_id`)
VALUES 
('Computer Won\'t Start', 'Alice Johnson reports that her desktop computer is unresponsive after pressing the power button.', 1, 1, 1),
('Email Not Sending', 'John Smith’s emails are stuck in the Outbox. SMTP error displayed.', 2, 2, 2),
('Slow Network Connection', 'Michael Brown reports extremely slow internet speed across the office network.', 3, 1, 1),
('Forgotten Password Reset', 'Emma Williams forgot her email password and requires a reset.', 4, 3, 3),
('Printer Offline', 'Sarah Davis says the office printer is showing "offline" and not responding.', 5, 2, 1),
('Software Installation Request', 'Olivia Miller requests Adobe Photoshop installation for the marketing team.', 6, 3, 4),
('Laptop Overheating', 'Daniel Garcia reports his laptop becomes extremely hot during use and shuts down.', 7, 1, 1),
('VPN Connection Failure', 'Sophia Wilson cannot connect to the VPN remotely. Error: "VPN server unreachable."', 8, 1, 2),
('Monitor Display Flickering', 'James Taylor’s screen flickers intermittently when using the docking station.', 9, 2, 1),
('Shared Drive Access Denied', 'Isabella Martinez cannot access shared folders on the network.', 10, 2, 2),
('Malware Detected on PC', 'David Thompson’s antivirus flagged malware during a routine scan.', 11, 1, 1),
('Lost Access Card', 'Charlotte Evans lost her access card and cannot enter the building.', 12, 2, 3),
('Application Crashing Repeatedly', 'Benjamin White reports that a finance app crashes when opening specific reports.', 13, 1, 1),
('Bluetooth Devices Not Connecting', 'Amelia Harris is unable to connect Bluetooth headphones to her laptop.', 14, 3, 4),
('Phone System Down', 'Ethan Lewis reports the VoIP phone system is not operational for all employees.', 15, 1, 1),
('Dual Monitor Setup Request', 'Grace Robinson requested an additional monitor for her workstation.', 16, 3, 4),
('Database Access Request', 'Liam Hall requires access to the company’s internal database as a new hire.', 17, 2, 1),
('Keyboard Keys Not Working', 'Mia Young reports that several keys on her keyboard are unresponsive.', 18, 2, 2),
('Unable to Download Attachments', 'Noah Scott cannot download email attachments; browser shows "blocked" message.', 19, 3, 3),
('Operating System Update Failure', 'Harper King reports that Windows updates fail with error code 0x80070005.', 20, 2, 1);


Notes:
contact_id: Assigned sequential IDs (1–20) for each contact.
priority_id:
1 = High Priority
2 = Medium Priority
3 = Low Priority
status_id:
1 = Open
2 = In Progress
3 = Resolved
4 = Pending