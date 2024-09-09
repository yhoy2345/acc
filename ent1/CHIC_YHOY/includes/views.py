# views.py
from django.shortcuts import redirect, render
from .models import Prenda

def inicio(request):
    if not request.user.is_authenticated:
        return redirect("Location: login.php")  # Redirige a la página de inicio de sesión si no está autenticado

    # Obtén el género del usuario desde la sesión (puedes ajustarlo según tu lógica)
    genero_usuario = request.session.get('genero', 'm')  # Usa 'm' como valor por defecto

    # Filtra las prendas según el género del usuario
    prendas = Prenda.objects.filter(genero=genero_usuario)

    return render(request, 'inicio.html', {'prendas': prendas})
