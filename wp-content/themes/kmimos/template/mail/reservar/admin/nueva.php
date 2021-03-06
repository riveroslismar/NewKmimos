<div style='text-align:center; margin-bottom: 34px;'>
	<img src='[URL_IMGS]/header_nueva_reserva.png' style='width: 100%;' >
</div>

<div style='padding: 0px; margin-bottom: 34px;'>

	<div style='margin-bottom: 30px; font-size: 14px; line-height: 1.07; letter-spacing: 0.3px; color: #000000; margin-bottom: 18px;'>
		
		[MODIFICACION]
		
	    <div style='font-family: Arial; font-size: 14px; line-height: 1.07; letter-spacing: 0.3px; color: #000000; padding-bottom: 19px;'>
	    	¡Hola Administrador!
	    </div>
		<div style='font-family: Arial; font-size: 20px; font-weight: bold; letter-spacing: 0.4px; color: #6b1c9b; padding-bottom: 19px;'>
			[tipo_servicio] por [name_cliente]
		</div>	
	    <div style='font-family: Arial; font-size: 14px; line-height: 1.07; letter-spacing: 0.3px; color: #000000;'>
	    	El cliente <strong>[name_cliente]</strong> ha realizado una solicitud de reserva.
	    </div>
	</div>

	<div style='text-align: center;'>

		<div style='display: block; border-radius: 2.8px; background-color: #f4f4f4; width: 147px; margin: 0px auto 29px; font-family: Arial; font-size: 12px; letter-spacing: 0.3px; color: #000000; padding: 12px 0px;'>
			Reserva #: <strong>[id_reserva] </strong>
		</div>
        
		<div style='font-family: Arial; font-size: 15px; font-weight: bold; letter-spacing: 0.3px; text-align: center; color: #000000; margin-bottom: 12px;'>
			¿Aceptas la solicitud?
		</div>

		<div style='text-align: center; margin-bottom: 12px;'>
			<a href='[ACEPTAR]' style='text-decoration: none;'><img src='[URL_IMGS]/btn_aceptar.png' style='width: 252px;' /></a>
		</div>

		<div style='font-family: Arial; font-size: 14px; line-height: 1.21; letter-spacing: 0.3px; color: #000000; margin-bottom: 39px;'>
			AHORA NO PUEDO, <a href='[RECHAZAR]' style='font-weight: 400; color: #000;'>RECHAZAR</a>
		</div>

        <div>
            
            <div style='display: table-cell; width: 62px; padding-right: 20px;'>
				<img src='[avatar_cliente]' style='width: 62px; height: 62px; border-radius: 50%;' >
			</div>
			<div style='display: table-cell; vertical-align: middle; padding-left: 0px; text-align: left; '>
				<div style='font-family: Arial; font-size: 11px; font-weight: bold; letter-spacing: -0.1px; color: #0d7ad9;'>
					DATOS DEL CLIENTE 
				</div>				    
			    <div style='font-family: Arial; font-size: 20px; font-weight: bold; letter-spacing: 0.4px; color: #000000; margin-bottom: 2px;'>
			    	[name_cliente]
			    </div>			    
			    <div style='font-family: Arial; font-size: 14px; letter-spacing: 0.3px; color: #000000; margin-bottom: 2px;'>
			    	[telefonos_cliente]
			    </div>		    
			    <div style='font-family: Arial; font-size: 14px; letter-spacing: 0.3px; color: #000000; margin-bottom: 12px;'>
			    	[correo_cliente]
			    </div>
			</div>
            
        </div>

        <div>
            
            <div style='display: table-cell; width: 62px; padding-right: 20px;'>
				<img src='[avatar_cuidador]' style='width: 62px; height: 62px; border-radius: 50%;' >
			</div>
			<div style='display: table-cell; vertical-align: middle; padding-left: 0px; text-align: left; '>
				<div style='font-family: Arial; font-size: 11px; font-weight: bold; letter-spacing: -0.1px; color: #0d7ad9;'>
					DATOS DEL CUIDADOR 
				</div>				    
			    <div style='font-family: Arial; font-size: 20px; font-weight: bold; letter-spacing: 0.4px; color: #000000; margin-bottom: 2px;'>
			    	[name_cuidador]
			    </div>			    
			    <div style='font-family: Arial; font-size: 14px; letter-spacing: 0.3px; color: #000000; margin-bottom: 2px;'>
			    	[telefonos_cuidador]
			    </div>		    
			    <div style='font-family: Arial; font-size: 14px; letter-spacing: 0.3px; color: #000000; margin-bottom: 12px;'>
			    	[correo_cuidador]
			    </div>
			</div>
            
        </div>

	</div>

</div>

<div style='margin-bottom: 39px; text-align: left;'>

	<div style='font-family: Arial; font-size: 11px; font-weight: bold; letter-spacing: -0.1px; color: #0d7ad9; margin-bottom: 8px;'>
		DETALLE DE LAS MASCOTAS
	</div>

	<div style='border-radius: 2.8px; background-color: #f4f4f4;'>
		<table cellpadding="0" cellspacing="0" style='width: 100%;'>
			<tr style='border-bottom: solid 1px #000000;font-family: Arial; font-size: 10px; line-height: 1.07; letter-spacing: 0.3px; color: #000000; font-weight: 600;'>
				<td style='padding: 7px; padding-left: 37px; width: 20px;'>
					NOMBRE
				</td>
				<td style='padding: 7px; width: 100px;'>
					RAZA
				</td>
				<td style='padding: 7px; width: 100px;'>
					EDAD
				</td>
				<td style='padding: 7px; width: 50px;'>
					TAMA&Ntilde;O
				</td>
				<td style='padding: 7px;'>
					COMPORTAMIENTO
				</td>
			</tr>

            [mascotas]

		</table>
	</div>

</div>

<div style='margin-bottom: 44px; text-align: left;'>

	<div style='font-family: Arial; font-size: 11px; font-weight: bold; letter-spacing: -0.1px; color: #0d7ad9; margin-bottom: 17px;'>
		DETALLE DEL SERVICIO
	</div>

	[DETALLES_SERVICIO]
    
    <div style='overflow: hidden;'>
        <table cellpadding="0" cellspacing="0" style='box-sizing: border-box; width: 100%; background-color: #FFF; font-family: Arial; font-size: 10px; font-weight: bold; line-height: 1.5; letter-spacing: 0.2px; color: #000000; border: solid 1px #CCC; border-radius: 2.8px; margin-bottom: 15px;'>
            <tr style=''>
                <td style='width: 80px; background-color: #f4f4f4; text-align: center; vertical-align: middle;'>
                    <img src='[URL_IMGS]/dog.png'>
                </td>
                <td style='width: 150px; padding: 7px; padding-left: 37px; border-bottom: solid 1px #CCC;'>
                    CANTIDAD
                </td>
                <td style='width: 170px; padding: 7px; border-bottom: solid 1px #CCC;'>
                    TIEMPO
                </td>
                <td style='width: 100px; padding: 7px; border-bottom: solid 1px #CCC;'>
                    PRECIO UNITARIO
                </td>
                <td style='width: 100px; padding: 7px; border-bottom: solid 1px #CCC;'>
                    SUBTOTAL
                </td>
            </tr>

            [desglose]

            [ADICIONALES]
            [TRANSPORTE]

        </table>
    </div>
    
    [TOTALES]

</div>