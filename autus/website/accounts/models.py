from django.db import models

# Create your models here.

class Student(models.Model):
    Name = models.CharField(max_length=100)
    Password = models.CharField(max_length=14)
    Email = models.EmailField()
    Gender = models.CharField(max_length=100)
    Contact = models.CharField(max_length=10)    
    Courses = models.CharField(max_length=100)
    
        

    