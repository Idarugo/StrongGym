-- Creación de la tabla de Clientes
CREATE TABLE Clientes (
    RUT CHAR(12) PRIMARY KEY,
    Nombre VARCHAR(50),
    Apellido VARCHAR(50),
    Email VARCHAR(100),
    Telefono VARCHAR(20),
    FechaRegistro DATE,
    FechaVencimiento DATE,
    PlanActivo INT,
    SaldoPendiente DECIMAL(10, 2),
    PasswordHash VARCHAR(255)
);


-- Creación de la tabla de Planes_Membresia
CREATE TABLE Planes_Membresia (
    IDPlan INT PRIMARY KEY,
    NombrePlan VARCHAR(50),
    DuracionDias INT,
    Precio DECIMAL(10, 2),
    Descripcion TEXT
);

-- Creación de la tabla de Rutinas
CREATE TABLE Rutinas (
    IDRutina INT PRIMARY KEY,
    IDCliente INT, -- FK a Clientes
    NombreRutina VARCHAR(100),
    FechaCreacion DATE,
    Descripcion TEXT
);

-- Creación de la tabla de Ejercicios (Opcional)
CREATE TABLE Ejercicios (
    IDEjercicio INT PRIMARY KEY,
    NombreEjercicio VARCHAR(100),
    Descripcion TEXT,
    Series INT,
    Repeticiones INT,
    Instrucciones TEXT
);

-- Creación de la tabla de Horarios
CREATE TABLE Horarios (
    IDHorario INT PRIMARY KEY,
    DiaSemana VARCHAR(15),
    HoraInicio TIME,
    HoraFinalizacion TIME,
    TipoClase VARCHAR(50)
);

-- Creación de la tabla de Servicios
CREATE TABLE Servicios (
    IDServicio INT PRIMARY KEY,
    NombreServicio VARCHAR(100),
    Descripcion TEXT,
    Precio DECIMAL(10, 2)
);
