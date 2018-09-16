<?php

const USER = 'qaan853';
const PASSWORD = 'Malg541g';
const HOST = '	qaan853.diabetesvirtual.com';
const DB_NAME = 'qaan853';

global $errores;

$errores = [];

/**
 * Añade un error de base de datos al array de errores
 *
 * @global array $errores
 * @param string $message
 */
function logger($message) {
    global $errores;

    $fecha = new DateTime();

    $errores[] = [
        'fecha' => $fecha->format('d-m-Y H:i:s'),
        'error' => $message
    ];
}

/**
 * Devuelve un array con todos los errores
 *
 * @global array $errores
 * @return array
 */
function get_db_errores() {
    global $errores;
    return $errores;
}

/**
 * Crea una conexion a la base de datos
 * @return \PDO|false
 */
function conectar() {
    try {
        $dsn = 'mysql:dbname=' . DB_NAME . ';host=' . HOST;
        $conexion = new PDO($dsn, USER, PASSWORD);
        $conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $conexion;
    } catch (PDOException $ex) {
        logger($ex->getMessage());
        return false;
    }
}

/**
 * Devuelve una query preparada y ejecutada
 *
 * @param PDO $conexion
 * @param string $sql
 * @param array $params
 * @return PDOStatement
 */
function executeQuery($conexion, $sql, $params = null) {
    try {
        if ($conexion instanceof PDO) {
            $stmt = $conexion->prepare($sql);
        } else {
            return false;
        }

        if ($params != null) {
            foreach ($params as $param => $value) {
                $stmt->bindValue(':' . $param, $value);
            }
        }

        $stmt->execute();
        return $stmt;
    } catch (PDOException $ex) {
        logger($ex->getMessage());
        return false;
    }
}

/**
 * Ejecuta una consulta a la base de datos.
 *
 * Devuelve el array con los resultados de la consulta si ha logrado ejecutarse con exito
 * y si no devuelve false que significa que ha fallado
 *
 * @param PDO $conexion
 * @param string $sql
 * @param array $params
 * @return array|boolean
 */
function query($conexion, $sql, $params = null) {
    $stmt = executeQuery($conexion, $sql, $params);

    if ($stmt) {
        return $stmt->fetchAll();
    }

    return false;
}

/**
 * Ejecuta Insert, Delete y Update y devuelve el numero de filas afectadas
 *
 * @param PDO $conexion
 * @param string $sql
 * @param array $params
 * @return int
 */
function execute($conexion, $sql, $params = null) {
    $stmt = executeQuery($conexion, $sql, $params);

    if ($stmt) {
        return $stmt->rowCount();
    }

    return 0;
}