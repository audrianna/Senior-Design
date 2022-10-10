from django import forms
from .models import Student

class Studentform(forms.ModelForm):
    class Meta:
        model = Student
        fields = ['fname', 'lname', 'email', 'passwd', 'banner', 'classification']