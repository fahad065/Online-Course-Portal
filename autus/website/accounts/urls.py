from django.urls import path
from .  import views

urlpatterns = [
    path('register',views.register,name="register"),
    path('login',views.login,name="login"),
    path('submit',views.submit,name="submit"),
    path('signin',views.submit,name="signin"),
]