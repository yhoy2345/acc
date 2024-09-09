# urls.py
from django.urls import path
from .views import inicio

urlpatterns = [
    path('', inicio, name="location: usuario.php"),
    # otras rutas...
]
