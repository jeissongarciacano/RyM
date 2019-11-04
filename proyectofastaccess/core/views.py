from django.shortcuts import render,HttpResponse

# Create your views here.

def login(request):
  
   return render(request, "core/login.html") 

def home(request):
  
   return render(request, "core/home.html") 

def informacion(request):
  
  return render(request, "core/informacion.html")

def parqueaderos(request):
  
  return render(request,"core/parqueaderos.html")

def recarga(request):
  
  return render(request,"core/recarga.html")

def infopersonal(request):
  
  return render(request,"core/infopersonal.html")










  
