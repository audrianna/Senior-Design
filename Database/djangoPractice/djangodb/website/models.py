from django.db import models

# Create your models here.
class Student(models.Model):
 fname = models.CharField(max_length = 50)
 lname = models.CharField(max_length = 100)
 email = models.EmailField(max_length = 100)
 passwd = models.CharField(max_length = 50)
 banner = models.CharField(max_length = 50)
 classification = models.CharField(max_length = 50)

 def __self__(self):
    return self.fname + ' ' + self.lname


