import mysql.connector
import os 
import time

def generar_reporte():
    try:
        time.sleep(5)
        conexion = mysql.connector.connect(
            host ="db",
            user ="root",
            password ="rootpassword",
            database ="portafolio_db"
        )
        cursor = conexion.cursor()
        
        cursor.execute("SELECT COUNT(*) FROM contactos") #Esto es para consultar los mensajes
        total = cursor.fetchone()[0]
        
        ruta_reporte = "/app/output/reporte.txt"
        
        with open(ruta_reporte, "w") as f:
            f.write(f"Reporte de Mensajes\n")
            f.write(f"========================================\n")
            f.write(f"total de mensajes recibidos: {total}\n")
            f.write(f"Ultima actualizcion: {time.strftime('%d-%m-%Y %H:%M:%S')}")
            
        print("Reporte Generado con exito en el volumen compartido.")
        
        conexion.close()
    except Exception as e:
        print(f"Error al generar reporte: {e}")
    
if __name__ == "__main__":
    while True:
        generar_reporte()
        time.sleep(1)