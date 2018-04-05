<form action="crearVisita.php" method="post">
    <div>
        <label for="rutVecino">Rut Vecino:</label>
        <input type="int" id="rutVecino" name="rutVecino"/>
    </div>
    <div>
        <label for="rutAdmin">Rut Administrador:</label>
        <input type="int" id="rutAdmin" name="rutAdmin"/>
    </div>
    <div>
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha"/>
    </div>
    <div>
        <label for="descripcion">Descripcion:</label>
        <input type="text" id="descripcion" name="descripcion"/>
    </div>
    <div>
        <label for="importe">Importe:</label>
        <input type="int" id="importe" />
    </div>

    <input type="submit" value="Enviar" />
</form>