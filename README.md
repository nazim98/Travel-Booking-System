KULLIYYAH OF INFORMATION & COMMUNICATION TECHNOLOGY

INFO 3305 WEB APPLICATION DEVELOPMENT
SEMESTER I, 2023/2024
SECTION 1

GROUP PROJECT PROPOSAL
TRAVEL BOOKING SYSTEM

PREPARED BY: GROUP 4

NAME AND MATRIC NUMBER 
1. FAIZAL AKHTAR BIN AZHAR
2124565
2. WAN MOHD NAZIM BIN WAN MUHAMAD SAIDIN
2114261
3. MUHAMMAD HAFIZ BIN MOHD ZULKARNAIN
2111359
4. NURAIN BINTI MOHAMED FARID
2117492
5. NUR SYAHIRAH BINTI AHMAD YUSOF
2110102

LECTURER
DR.MOHD KHAIRUL AZMI BIN HASSAN

DUE
1 JANUARY 2024

Introduction

Introducing our proposed Travel Booking System,  a smart web application that makes planning and booking trips easy and enjoyable. This system focuses on providing curated travel packages that encompass every essential aspect of a journey, ensuring a hassle-free and enjoyable exploration of various destinations. It is designed to be user-friendly, focusing on simplicity and efficiency. Its user interface is characterized by its simplicity and functionality. Moreover, the interface is designed to provide users with a visually pleasing and easily navigable environment, enhancing the overall user experience while exploring and selecting travel options. 

It simplifies the process of selecting pre-defined travel packages. Users can explore a range of packages, each meticulously crafted to include accommodations (such as hotels, chalets, and homestays), transportation options, predefined trip durations, and a comprehensive list of places to visit during the specified itinerary. This approach eliminates the complexities of tailoring travel plans to individual preferences, providing users with a convenient and efficient method to select a package that suits their desired travel experience. Also, the incorporation of dynamic routes ensures a fluid and intuitive navigation experience, enabling users to traverse the platform seamlessly.

Real-time updates and notifications are integrated to keep users well-informed about their booking confirmations, itinerary details and adjustments, and any special offers associated with the selected travel package. This feature enhances user engagement and ensures transparency throughout the booking process. In conclusion, this system is tailored to cater to users seeking a straightforward and efficient way to explore and select pre-defined travel packages. By focusing on curated options that include accommodations, transportation, trip durations, and destination highlights, our system offers a user-friendly approach to booking memorable journeys and embracing the simplicity of travel planning.

Objective: 
1. Provision our tourism destination and property.
2. Selling our packages and services.

ERD Relationship Diagram 

![ERD Relationship](https://drive.google.com/uc?id=1s2QH1bImUzSTgiBz4njyFKJ89QBytKh0)

Entities:
1. Customer:
Attributes: CustomerID (Primary Key), FirstName, LastName, Email, Phone
2. Booking:
Attributes: BookingID (Primary Key), CustomerID (Foreign Key), DepartureDate, ReturnDate, TotalCost
3. TravelPackage:
Attributes: PackageID (Primary Key), PackageName, Description, PackagePrice

Relationships:
1. One-to-Many relationship between Customer and Booking (a customer can have multiple bookings).
2. One-to-Many relationship between TravelPackage and Booking (a travel package can be associated with multiple bookings, but each booking is associated with one travel package).

Function and Functionalities

1. Customer Management
Function: User Authentication
Functionalities:
Customer registration
Secure login system
Function: Profile Management
Functionalities:
Allowing customers to update their profile information

2. Booking Management
Function: Booking Operations
Functionalities:
Booking creation (form for customers)
Modification and cancellation of existing bookings

3. Travel Package Management
Function: Package Presentation
Functionalities:
Displaying available travel packages and services with details (name, description, price)

4. Cost Calculation
Function: Cost Calculation
Functionalities:
Automatically calculating the total cost of a booking based on the selected travel package or service and dates

5. Admin Panel
Function: Administration
Functionalities:
Admin dashboard for managing customers, bookings, and travel packages
Viewing and managing customer details and bookings
Adding, modifying, or removing travel packages

6. Responsive Design
Function: Accessibility
Functionalities:
Ensuring the website is accessible and user-friendly on various devices


Sequence Diagrams

![Sequence Diagram for Booking](https://drive.google.com/uc?export=view&id=1PWoZVhQeiMCtS4Ha8F0YhiKqCMIeRtKZ)

![Sequence Diagram for Customer Login](https://drive.google.com/uc?export=view&id=1HGLmLCkMwY6KKRk2mX4kqQ0BMH7-ODiM)

![Sequence Diagram for Customer Signup](https://drive.google.com/uc?export=view&id=1orIk7pGHhqyyh2_nyYA5bRnWi4g9YJm_)


References
https://tnazim1998.wixsite.com/vacation101


