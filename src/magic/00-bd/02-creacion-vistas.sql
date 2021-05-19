CREATE OR REPLACE VIEW vista_mostrar_cartas AS 
SELECT ca.`id_carta`, ca.`nombre`, el.`nombre_elemento`, el.`icono_mana`, el.`fondo_carta`, ca.`num_mana_color`, ca.`mana_incoloro`, ca.`img_criatura`, ca.`tipo`,
    ca.`subtipo`, ex .`icono_expansion`, ca.`habilidad`, ca.`descripcion`, ca.`fuerza`, ca.`resistencia`, ca.`autor`
    FROM `cartas` ca LEFT JOIN `elementos` el ON ca.`id_elemento` = el.`id_elemento`
    LEFT JOIN `expansiones` ex ON ca.`id_expansion` = ex.`id_expansion`;