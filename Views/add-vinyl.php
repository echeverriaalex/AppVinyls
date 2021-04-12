<div>
    <form action="<?php echo FRONT_ROOT?>Vinyls/Add" method="POST">
        <p>cargar discos</p><hr>
        <label for="Artista o Banda"> Artista o Banda</label><br>
        <input type="Artista o banda" id="Artista o Banda" name="Artista o Banda" placeholder="artista"><br>
        <label for="Nombre de disco">Nombre de disco</label><br>
        <input type="Nombre de disco" id=" Nombre de disco" name=" Nombre de disco"><br>
        <!--...................año de edicion.................-->
        <label for="año">Seleccione un año</label>
        <input type="date" id="año" name="año"><br>
        <!-------..............pais...........-->
        <label for="pais">Seleccione un pais</label><br>
        <input type="Pais" id="pais" name="pais"><br>
        <!--.............value...............-->
        <label for="Genero">Seleccione un genero</label>
        <select id="Genero" name="Genero"> 
            <option value="Rock">Rock</option>
            <option value="Salsa">Salsa</option>
            <option value="Pop">Pop</option>
            <option value="Bachata">Bachata</option>
        </select>

        <label for="Estado de caja">Estado de caja</label> 
        <select id=" Estado de caja" name=" Estado de caja"> 
            <option value="Dañada">Dañada</option>
            <option value="Buen estado">Buen estado</option>
            <option value="Nueva">Nueva</option>
            <option value="No tiene">No tiene</option>
        </select>

        <label for="Estado">Estado de disco</label>  
        <select id="Estado" name="Genero"> 
            <option value="Dañado">Dañado</option>
            <option value="Buen estado">Buen estado</option>
            <option value="Nuevo">Nuevo</option>
             
        </select><br>

         <!--...................formato   y velocidad...........-->
        <p>Formato</p>
        <input type="radio" id="lp" name="gender" value="lp">
        <label for="lp">lP</label>
        <input type="radio" id="EP" name="gender" value="EP">
        <label for="EP">EP</label>
        <input type="radio" id="Singles" name="gender" value="Singles">
        <label for="Singles">Singles</label>

        <label for="Velocidadad">Velocidad</label>  
        <select id="Velocidad" name="Velocidad"> 
            <option value="Lenta">Lenta</option>
            <option value="Media">Media</option>
            <option value="Rapida">Rapida</option>     
        </select>
         <!--...................observaciones.................-->
        <p>observaciones</p>
        <textarea name="observaciones" id="" cols="40" rows="10"></textarea><br>
        <!--..........subir archivo...............-->
        <h4>seleccione un archivo</h4>
        <input type="file" name="Foto">

        <button type="submit"> Add vinyl</button>
    </form>
</div>