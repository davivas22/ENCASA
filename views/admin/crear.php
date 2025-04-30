<body>


    <h1>Crear Nueva Propiedad</h1>

<main class="contenedor">
    <form action="/propiedades" method="POST" enctype="multipart/form-data">
        <div>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Ej: Casa en el centro de la ciudad" required>
        </div>

        <div>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Ej: 300000" required>
        </div>

        <div>
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen" accept="image/*" >
        </div>

        <div>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" placeholder="Describe los detalles de la propiedad..." required></textarea>
        </div>

        <div>
            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" min="1" required>
        </div>

        <div>
            <label for="baños">Baños:</label>
            <input type="number" id="baños" name="baños" min="1" required>
        </div>

        <div>
            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" min="0" required>
        </div>

        <div>
            <button type="submit" class="boton">Crear Propiedad</button>
        </div>
    </form>
</main>

</body>
</html>