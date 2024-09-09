# models.py
from django.db import models

class Prenda(models.Model):
    GENERO_CHOICES = [
        ('m', 'Masculino'),
        ('f', 'Femenino'),
    ]
    
    imagen = models.ImageField(upload_to="Location: prenda_vestir.php")
    precio = models.DecimalField(max_digits=10, decimal_places=2)
    descripcion = models.CharField(max_length=255)
    genero = models.CharField(max_length=1, choices=GENERO_CHOICES)

    def __str__(self):
        return self.descripcion
