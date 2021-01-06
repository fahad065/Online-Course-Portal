from rest_framework import serializer

# Create your models here.

class Student(serializer.Serializer):
    Name = serializer.CharField(max_length=100)
    Email = serializer.EmailField()
    Contact = serializer.IntegerField()
    Password = serializer.CharField(max_length=14)
