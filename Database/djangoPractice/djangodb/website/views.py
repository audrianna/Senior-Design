from django.shortcuts import render
from .models import Student
from .forms import Studentform
# Create your views here.
def home(request):
    return render(request, 'home.html', {})

def join(request):
    if request.method == 'POST':
        form = Studentform(request.POST or None)
        if form.is_valid():
            form.save()
        return render(request, 'join.html', {})
    else:
     return render(request,'join.html', {})