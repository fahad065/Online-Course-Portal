from django.shortcuts import render,redirect
from rest_framework.views import APIView
from rest_framework.response import Response
from .models import Student
from django.contrib.auth.models import User,auth
from django.contrib import messages
# Create your views here.
def register(request):
     return render(request,'register.html')    
def login(request):
    return render(request, 'login.html') 
def submit(request) :
    Name = request.POST["name"]
    Password = request.POST["password"]
    Gender = request.POST["gender"]
    Email = request.POST["email"]
    Courses = request.POST["courses"]
    Contact = request.POST["phone"]
    student_info = Student(Name=Name,Password=Password,Gender=Gender,Email=Email,Courses=Courses,Contact=Contact)
    student_info.save()
    return redirect("/course")

    
