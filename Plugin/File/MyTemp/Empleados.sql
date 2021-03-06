USE [ssucbba2015]
GO
/****** Object:  Table [dbo].[ViaticoDetalle]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[ViaticoDetalle](
	[Viatico] [char](15) NOT NULL,
	[Numero] [char](5) NOT NULL,
	[TipoViatico] [char](5) NULL,
	[Descripcion] [text] NOT NULL,
	[Cantidad] [money] NOT NULL,
	[Moneda] [char](5) NOT NULL,
	[Monto] [money] NOT NULL,
	[Retencion] [money] NULL,
 CONSTRAINT [PK_ViaticoDetalle] PRIMARY KEY CLUSTERED 
(
	[Viatico] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Viatico]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Viatico](
	[Codigo] [char](15) NOT NULL,
	[Referencia] [varchar](15) NULL,
	[Persona] [char](15) NOT NULL,
	[Fecha] [smalldatetime] NULL,
	[Memo] [char](15) NOT NULL,
	[FechaSalida] [smalldatetime] NULL,
	[Resolucion] [char](15) NULL,
	[FechaRetorno] [smalldatetime] NULL,
	[Banco] [varchar](50) NULL,
	[NumeroCuenta] [varchar](15) NULL,
	[NumeroCheque] [varchar](15) NULL,
	[Observaciones] [text] NULL,
 CONSTRAINT [PK_Viatico] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[VariableTesoreria3]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[VariableTesoreria3](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[CodigoEDT] [varchar](25) NULL,
	[NombreAlternativo] [varchar](150) NULL,
	[Descripcion] [text] NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_VariableTesoreria3] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[VariableTesoreria2]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[VariableTesoreria2](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[CodigoEDT] [varchar](25) NULL,
	[NombreAlternativo] [varchar](150) NULL,
	[Descripcion] [text] NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_VariableTesoreria2] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[VariableTesoreria1]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[VariableTesoreria1](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[CodigoEDT] [varchar](25) NULL,
	[NombreAlternativo] [varchar](150) NULL,
	[Descripcion] [text] NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_VariableTesoreria1] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[VariablePresupuesto5]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[VariablePresupuesto5](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[CodigoEDT] [varchar](25) NULL,
	[NombreAlternativo] [varchar](150) NULL,
	[Descripcion] [text] NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_VariablePresupuesto5] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[VariablePresupuesto4]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[VariablePresupuesto4](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[CodigoEDT] [varchar](25) NULL,
	[NombreAlternativo] [varchar](150) NULL,
	[Descripcion] [text] NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_VariablePresupuesto4] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[VariablePresupuesto3]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[VariablePresupuesto3](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[CodigoEDT] [varchar](25) NULL,
	[NombreAlternativo] [varchar](150) NULL,
	[Descripcion] [text] NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_VariablePresupuesto3] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[VariablePresupuesto2]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[VariablePresupuesto2](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[CodigoEDT] [varchar](25) NULL,
	[NombreAlternativo] [varchar](150) NULL,
	[Descripcion] [text] NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_VariablePresupuesto2] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[VariablePresupuesto1]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[VariablePresupuesto1](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[CodigoEDT] [varchar](25) NULL,
	[NombreAlternativo] [varchar](150) NULL,
	[Descripcion] [text] NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_VariablePresupuesto1] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[VacacionParDet]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[VacacionParDet](
	[VacacionPar] [char](5) NOT NULL,
	[Inicio] [int] NOT NULL,
	[Fin] [int] NULL,
	[Dias] [money] NULL,
	[Acumulado] [money] NULL,
 CONSTRAINT [PK_VacacionParDet] PRIMARY KEY CLUSTERED 
(
	[VacacionPar] ASC,
	[Inicio] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[VacacionPar]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[VacacionPar](
	[Codigo] [char](5) NOT NULL,
	[Nombre] [varchar](50) NOT NULL,
	[Fecha] [smalldatetime] NOT NULL,
	[Descripcion] [text] NULL,
 CONSTRAINT [PK_VacacionPar] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Ubicacion]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Ubicacion](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[Sigla] [varchar](25) NULL,
 CONSTRAINT [PK_Ubicacion] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Turno]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Turno](
	[Codigo] [char](5) NOT NULL,
	[Nombre] [varchar](50) NOT NULL,
	[HoraEntrada] [smalldatetime] NULL,
	[HoraSalida] [smalldatetime] NULL,
	[Descripcion] [text] NULL,
 CONSTRAINT [PK_Turno] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Tolerancia]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Tolerancia](
	[Horario] [char](5) NOT NULL,
	[Fecha] [smalldatetime] NOT NULL,
	[Nombre] [varchar](100) NOT NULL,
	[HoraEntrada] [smalldatetime] NULL,
	[ToleranciaEntrada] [smallint] NULL,
	[HoraSalida] [smalldatetime] NULL,
	[ToleranciaSalida] [smallint] NULL,
	[PesoAsistencia] [money] NULL,
	[PesoAusencia] [money] NULL,
	[PesoExtra] [money] NULL,
	[EsFeriado] [bit] NULL,
	[Descripcion] [text] NULL,
 CONSTRAINT [PK_Tolerancia] PRIMARY KEY CLUSTERED 
(
	[Horario] ASC,
	[Fecha] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[TipoViatico]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[TipoViatico](
	[Codigo] [char](5) NOT NULL,
	[Tipo] [tinyint] NOT NULL,
	[Nombre] [varchar](100) NOT NULL,
	[Moneda] [char](5) NOT NULL,
	[Monto] [money] NOT NULL,
 CONSTRAINT [PK_TipoViatico] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[TipoPrestamo]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[TipoPrestamo](
	[Codigo] [char](5) NOT NULL,
	[Nombre] [varchar](100) NOT NULL,
 CONSTRAINT [PK_TipoPrestamo] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[TipoPlanilla]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[TipoPlanilla](
	[Codigo] [char](5) NOT NULL,
	[Nombre] [varchar](100) NOT NULL,
	[Tipo] [tinyint] NOT NULL,
	[GenerarDocumentoFinanciero] [bit] NULL,
	[TipoDocumentoFinanciero] [char](5) NULL,
 CONSTRAINT [PK_TipoPlanilla] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[TipoPermiso]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[TipoPermiso](
	[Codigo] [char](5) NOT NULL,
	[Nombre] [varchar](100) NOT NULL,
	[Tipo] [tinyint] NOT NULL,
	[Descripcion] [text] NULL,
 CONSTRAINT [PK_TipoPermiso] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[TipoPerfilEva]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[TipoPerfilEva](
	[Codigo] [char](5) NOT NULL,
	[Nombre] [varchar](100) NOT NULL,
 CONSTRAINT [PK_TipoPerfilEva] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[TipoID]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[TipoID](
	[Codigo] [char](5) NOT NULL,
	[Nombre] [varchar](100) NOT NULL,
	[Tipo] [tinyint] NOT NULL,
	[FormatoPlanilla] [tinyint] NOT NULL,
	[FormatoPapeleta] [tinyint] NOT NULL,
	[RedondearMonto] [bit] NULL,
	[Imponible] [bit] NULL,
	[Cotizable] [bit] NULL,
	[EtiquetaCantidad] [varchar](25) NULL,
	[FormulaCantidad] [varchar](2500) NULL,
	[EtiquetaMonto] [varchar](25) NULL,
	[FormulaMonto] [varchar](2500) NULL,
	[EtiquetaDescuento] [varchar](25) NULL,
	[FormulaDescuento] [varchar](2500) NULL,
	[CuentaExigible] [char](15) NULL,
	[EtiquetaValor01] [varchar](25) NULL,
	[FormulaValor01] [varchar](2500) NULL,
	[EtiquetaValor02] [varchar](25) NULL,
	[FormulaValor02] [varchar](2500) NULL,
	[EtiquetaValor03] [varchar](25) NULL,
	[FormulaValor03] [varchar](2500) NULL,
	[EtiquetaValor04] [varchar](25) NULL,
	[FormulaValor04] [varchar](2500) NULL,
	[EtiquetaValor05] [varchar](25) NULL,
	[FormulaValor05] [varchar](2500) NULL,
 CONSTRAINT [PK_TipoID] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[TipoGasto]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[TipoGasto](
	[Codigo] [char](5) NOT NULL,
	[Nombre] [varchar](100) NOT NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_TipoGasto] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[TipoDocumentoFinanciero]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[TipoDocumentoFinanciero](
	[Codigo] [char](5) NOT NULL,
	[Nombre] [varchar](100) NOT NULL,
	[Tipo] [tinyint] NOT NULL,
	[FormatoReporte] [tinyint] NOT NULL,
	[TituloReporte] [varchar](100) NOT NULL,
	[Presupuestado] [bit] NULL,
	[Prevenido] [bit] NULL,
	[Comprometido] [bit] NULL,
	[Devengado] [bit] NULL,
	[Ejecutado] [bit] NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_TipoDocumentoFinanciero] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[TipoDocumentoArticulo]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[TipoDocumentoArticulo](
	[Codigo] [char](5) NOT NULL,
	[Nombre] [varchar](100) NOT NULL,
	[Tipo] [tinyint] NOT NULL,
	[Proveedor] [tinyint] NOT NULL,
	[Organizacion] [tinyint] NOT NULL,
	[Persona] [tinyint] NOT NULL,
	[Factura] [tinyint] NOT NULL,
	[Costo] [tinyint] NOT NULL,
	[SubCosto] [tinyint] NOT NULL,
	[CuentaCosto] [tinyint] NOT NULL,
	[GenerarDocumentoFinanciero] [bit] NULL,
	[TipoDocumentoFinanciero] [char](5) NULL,
 CONSTRAINT [PK_TipoDocumentoArticulo] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[TipoDoc]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[TipoDoc](
	[Codigo] [char](5) NOT NULL,
	[Nombre] [varchar](100) NOT NULL,
 CONSTRAINT [PK_TipoDoc] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[TipoCon]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[TipoCon](
	[Codigo] [char](5) NOT NULL,
	[Nombre] [varchar](100) NOT NULL,
 CONSTRAINT [PK_TipoCon] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[SubCosto]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[SubCosto](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[CodigoEDT] [varchar](25) NULL,
	[NombreAlternativo] [varchar](150) NULL,
	[Descripcion] [text] NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_SubCosto] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[RelacionadorRecursoContabilidad]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[RelacionadorRecursoContabilidad](
	[Recurso] [char](15) NOT NULL,
	[VariablePresupuesto1] [char](15) NOT NULL,
	[VariablePresupuesto2] [char](15) NOT NULL,
	[VariablePresupuesto3] [char](15) NOT NULL,
	[VariablePresupuesto4] [char](15) NOT NULL,
	[VariablePresupuesto5] [char](15) NOT NULL,
	[Cuenta] [char](15) NOT NULL,
	[CuentaAuxiliar] [char](15) NOT NULL,
	[VariableTesoreria1] [char](15) NOT NULL,
	[Tipo] [tinyint] NOT NULL,
	[Observaciones] [varchar](100) NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_RelacionadorRecursoContabilidad] PRIMARY KEY CLUSTERED 
(
	[Recurso] ASC,
	[VariablePresupuesto1] ASC,
	[VariablePresupuesto2] ASC,
	[VariablePresupuesto3] ASC,
	[VariablePresupuesto4] ASC,
	[VariablePresupuesto5] ASC,
	[Cuenta] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[RelacionadorGastoContabilidad]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[RelacionadorGastoContabilidad](
	[Poa] [char](15) NOT NULL,
	[Gasto] [char](15) NOT NULL,
	[VariablePresupuesto1] [char](15) NOT NULL,
	[VariablePresupuesto2] [char](15) NOT NULL,
	[VariablePresupuesto3] [char](15) NOT NULL,
	[VariablePresupuesto4] [char](15) NOT NULL,
	[VariablePresupuesto5] [char](15) NOT NULL,
	[Costo] [char](15) NULL,
	[SubCosto] [char](15) NULL,
	[Cuenta] [char](15) NOT NULL,
	[CuentaAuxiliar] [char](15) NULL,
	[VariableTesoreria2] [char](15) NULL,
	[Tipo] [tinyint] NOT NULL,
	[Observaciones] [varchar](100) NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_RelacionadorGastoContabilidad] PRIMARY KEY CLUSTERED 
(
	[Poa] ASC,
	[Gasto] ASC,
	[VariablePresupuesto1] ASC,
	[VariablePresupuesto2] ASC,
	[VariablePresupuesto3] ASC,
	[VariablePresupuesto4] ASC,
	[VariablePresupuesto5] ASC,
	[Cuenta] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[RelacionadorArticuloFinanzas]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[RelacionadorArticuloFinanzas](
	[AlmacenArticulo] [char](15) NOT NULL,
	[Articulo] [char](15) NOT NULL,
	[CuentaRealizable] [char](15) NOT NULL,
	[CuentaAuxiliar] [char](15) NULL,
	[Costo] [char](15) NULL,
	[SubCosto] [char](15) NULL,
	[CuentaCosto] [char](15) NOT NULL,
	[Observaciones] [varchar](100) NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_RelacionadorArticuloFinanzas] PRIMARY KEY CLUSTERED 
(
	[AlmacenArticulo] ASC,
	[Articulo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Recurso]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Recurso](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[CodigoEDT] [varchar](25) NULL,
	[NombreAlternativo] [varchar](150) NULL,
	[Descripcion] [text] NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_Recurso] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PuestoRes]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PuestoRes](
	[Puesto] [char](15) NOT NULL,
	[Gestion] [smallint] NOT NULL,
	[Numero] [char](5) NOT NULL,
	[Descripcion] [text] NULL,
	[Programado] [money] NULL,
	[Ejecutado] [money] NULL,
 CONSTRAINT [PK_PuestoRes] PRIMARY KEY CLUSTERED 
(
	[Puesto] ASC,
	[Gestion] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PuestoPer]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PuestoPer](
	[Puesto] [char](15) NOT NULL,
	[PerfilEvaluacion] [char](10) NOT NULL,
	[PuntajeMinimo] [money] NULL,
	[Observaciones] [text] NULL,
 CONSTRAINT [PK_PuestoPer] PRIMARY KEY CLUSTERED 
(
	[Puesto] ASC,
	[PerfilEvaluacion] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PuestoInt]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PuestoInt](
	[Puesto] [char](15) NOT NULL,
	[Numero] [char](5) NOT NULL,
	[Tipo] [tinyint] NULL,
	[Descripcion] [varchar](150) NOT NULL,
 CONSTRAINT [PK_PuestoInt] PRIMARY KEY CLUSTERED 
(
	[Puesto] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PuestoFor]    Script Date: 03/23/2015 11:26:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PuestoFor](
	[Puesto] [char](15) NOT NULL,
	[Numero] [char](5) NOT NULL,
	[Descripcion] [varchar](150) NOT NULL,
	[NivelFormacion] [tinyint] NULL,
	[Prioridad] [tinyint] NULL,
 CONSTRAINT [PK_PuestoFor] PRIMARY KEY CLUSTERED 
(
	[Puesto] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PuestoExp]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PuestoExp](
	[Puesto] [char](15) NOT NULL,
	[Numero] [char](5) NOT NULL,
	[Descripcion] [varchar](150) NOT NULL,
	[ExperienciaLaboral] [smallint] NULL,
	[ExperienciaProfesional] [smallint] NULL,
	[NivelExperiencia] [tinyint] NULL,
	[Prioridad] [tinyint] NULL,
 CONSTRAINT [PK_PuestoExp] PRIMARY KEY CLUSTERED 
(
	[Puesto] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Puesto]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Puesto](
	[Codigo] [char](15) NOT NULL,
	[Nombre] [varchar](150) NOT NULL,
	[NumeroItem] [varchar](10) NULL,
	[Organizacion] [char](15) NOT NULL,
	[Cargo] [char](15) NOT NULL,
	[InmediatoSuperior] [char](15) NULL,
	[Factor] [money] NULL,
	[RazonPuesto] [text] NULL,
	[CualidadesPersonales] [text] NULL,
	[OtrosRequisitos] [text] NULL,
	[CumplimientoNormas] [text] NULL,
	[CuentaGastoIngreso01] [char](15) NULL,
	[CuentaGastoIngreso02] [char](15) NULL,
	[CuentaGastoIngreso03] [char](15) NULL,
	[CuentaGastoIngreso04] [char](15) NULL,
	[CuentaGastoIngreso05] [char](15) NULL,
	[CuentaGastoIngreso06] [char](15) NULL,
	[CuentaGastoIngreso07] [char](15) NULL,
	[CuentaGastoIngreso08] [char](15) NULL,
	[CuentaGastoIngreso09] [char](15) NULL,
	[CuentaGastoIngreso10] [char](15) NULL,
	[CuentaGastoAporte06] [char](15) NULL,
	[CuentaGastoAporte07] [char](15) NULL,
	[CuentaGastoAporte08] [char](15) NULL,
	[CuentaGastoAporte09] [char](15) NULL,
	[CuentaGastoAporte10] [char](15) NULL,
	[CuentaGastoProvision01] [char](15) NULL,
	[CuentaGastoProvision02] [char](15) NULL,
	[CuentaGastoProvision03] [char](15) NULL,
	[CuentaPasivoAporte01] [char](15) NULL,
	[CuentaPasivoAporte02] [char](15) NULL,
	[CuentaPasivoAporte03] [char](15) NULL,
	[CuentaPasivoAporte04] [char](15) NULL,
	[CuentaPasivoAporte05] [char](15) NULL,
	[CuentaPasivoAporte06] [char](15) NULL,
	[CuentaPasivoAporte07] [char](15) NULL,
	[CuentaPasivoAporte08] [char](15) NULL,
	[CuentaPasivoAporte09] [char](15) NULL,
	[CuentaPasivoAporte10] [char](15) NULL,
	[CuentaPasivoDescuento01] [char](15) NULL,
	[CuentaPasivoDescuento02] [char](15) NULL,
	[CuentaPasivoDescuento03] [char](15) NULL,
	[CuentaPasivoDescuento04] [char](15) NULL,
	[CuentaPasivoDescuento05] [char](15) NULL,
	[CuentaPasivoDescuento06] [char](15) NULL,
	[CuentaPasivoDescuento07] [char](15) NULL,
	[CuentaPasivoDescuento08] [char](15) NULL,
	[CuentaPasivoDescuento09] [char](15) NULL,
	[CuentaPasivoDescuento10] [char](15) NULL,
	[CuentaPasivoProvision01] [char](15) NULL,
	[CuentaPasivoProvision02] [char](15) NULL,
	[CuentaPasivoProvision03] [char](15) NULL,
 CONSTRAINT [PK_Puesto] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Proveedor]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Proveedor](
	[Codigo] [char](15) NOT NULL,
	[CategoriaProveedor] [char](15) NOT NULL,
	[Nombre] [varchar](150) NOT NULL,
	[PersonaContacto] [varchar](150) NULL,
	[Direccion] [varchar](100) NULL,
	[Telefono] [varchar](30) NULL,
	[Fax] [varchar](30) NULL,
	[Celular] [varchar](30) NULL,
	[Email] [varchar](100) NULL,
	[NIT] [varchar](15) NULL,
	[CuentaPorPagar] [char](15) NULL,
	[CuentaAuxiliar] [char](15) NULL,
	[Observaciones] [text] NULL,
	[PalmitoGeografica] [char](15) NULL,
 CONSTRAINT [PK_Proveedor] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Programa]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Programa](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[Sigla] [varchar](25) NULL,
	[Financiera] [char](5) NOT NULL,
	[NumeroCliente] [varchar](25) NULL,
	[NumeroCuenta] [varchar](25) NULL,
	[ExtensionArchivo] [varchar](5) NULL,
	[CodigoEDT] [varchar](25) NULL,
	[NombreAlternativo] [varchar](150) NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_Programa] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PrestamoDetalle]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PrestamoDetalle](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoPrestamo] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Fecha] [smalldatetime] NOT NULL,
	[Capital] [money] NULL,
	[Interes] [money] NULL,
	[Amortizacion] [money] NULL,
	[Observaciones] [varchar](100) NULL,
 CONSTRAINT [PK_PrestamoDetalle] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoPrestamo] ASC,
	[Numero] ASC,
	[Fecha] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PrestamoCambio]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PrestamoCambio](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoPrestamo] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Moneda] [char](5) NOT NULL,
	[TipoCambio] [money] NOT NULL,
 CONSTRAINT [PK_PrestamoCambio] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoPrestamo] ASC,
	[Numero] ASC,
	[Moneda] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Prestamo]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Prestamo](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoPrestamo] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Estado] [tinyint] NULL,
	[Persona] [char](15) NOT NULL,
	[Fecha] [smalldatetime] NULL,
	[MontoPrestamo] [money] NULL,
	[Moneda] [char](5) NOT NULL,
	[InteresAnual] [money] NULL,
	[NumeroCuotas] [smallint] NULL,
	[CuotaMensual] [money] NULL,
	[PrimeraCuota] [smalldatetime] NULL,
	[Referencia] [varchar](15) NULL,
	[Concepto] [text] NULL,
 CONSTRAINT [PK_Prestamo] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoPrestamo] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Poa]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Poa](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[CodigoEDT] [varchar](25) NOT NULL,
	[NombreAlternativo] [varchar](150) NULL,
	[Descripcion] [text] NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_Poa] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PlantillaDocumentoFinancieroParametro]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PlantillaDocumentoFinancieroParametro](
	[PlantillaDocumentoFinanciero] [char](15) NOT NULL,
	[Parametro] [char](100) NOT NULL,
	[TipoDato] [tinyint] NULL,
	[ValorDefecto] [varchar](100) NULL,
	[Orden] [tinyint] NULL,
	[Descripcion] [text] NULL,
 CONSTRAINT [PK_PlantillaDocumentoFinancieroParametro] PRIMARY KEY CLUSTERED 
(
	[PlantillaDocumentoFinanciero] ASC,
	[Parametro] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PlantillaDocumentoFinancieroDetalle]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PlantillaDocumentoFinancieroDetalle](
	[PlantillaDocumentoFinanciero] [char](15) NOT NULL,
	[Fila] [int] NOT NULL,
	[Columna] [char](50) NOT NULL,
	[Formula] [varchar](2500) NULL,
 CONSTRAINT [PK_PlantillaDocumentoFinancieroDetalle] PRIMARY KEY CLUSTERED 
(
	[PlantillaDocumentoFinanciero] ASC,
	[Fila] ASC,
	[Columna] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PlantillaDocumentoFinancieroContabilidad]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PlantillaDocumentoFinancieroContabilidad](
	[PlantillaDocumentoFinanciero] [char](15) NOT NULL,
	[Fila] [int] NOT NULL,
	[Costo] [char](15) NULL,
	[Cuenta] [char](15) NOT NULL,
	[CuentaAuxiliar] [char](15) NULL,
	[Monto1] [money] NULL,
	[Monto2] [money] NULL,
	[Monto3] [money] NULL,
	[Monto4] [money] NULL,
	[Monto9] [money] NULL,
	[Concepto] [varchar](100) NOT NULL,
 CONSTRAINT [PK_PlantillaDocumentoFinancieroContabilidad] PRIMARY KEY CLUSTERED 
(
	[PlantillaDocumentoFinanciero] ASC,
	[Fila] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PlantillaDocumentoFinanciero]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PlantillaDocumentoFinanciero](
	[Codigo] [char](15) NOT NULL,
	[Nombre] [varchar](150) NOT NULL,
	[Favorito] [bit] NULL,
	[Moneda] [char](5) NOT NULL,
	[Referencia] [varchar](1000) NULL,
	[Beneficiario] [varchar](1000) NULL,
	[Concepto] [text] NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_PlantillaDocumentoFinanciero] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PlanillaDetalle]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PlanillaDetalle](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoPlanilla] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Persona] [char](15) NOT NULL,
	[Puesto] [char](15) NOT NULL,
	[SueldoBasico] [money] NOT NULL,
	[DiasTrabajados] [money] NOT NULL,
	[DeclaracionImpuestos] [money] NULL,
	[SaldoImpuestos] [money] NULL,
	[Aporte01] [money] NULL,
	[Aporte02] [money] NULL,
	[Aporte03] [money] NULL,
	[Aporte04] [money] NULL,
	[Aporte05] [money] NULL,
	[Aporte06] [money] NULL,
	[Aporte07] [money] NULL,
	[Aporte08] [money] NULL,
	[Aporte09] [money] NULL,
	[Aporte10] [money] NULL,
	[Valor01] [money] NULL,
	[Valor02] [money] NULL,
	[Valor03] [money] NULL,
	[Valor04] [money] NULL,
	[Valor05] [money] NULL,
	[Valor06] [money] NULL,
	[Valor07] [money] NULL,
	[Valor08] [money] NULL,
	[Valor09] [money] NULL,
	[Valor10] [money] NULL,
	[Ingreso01] [money] NULL,
	[Ingreso02] [money] NULL,
	[Ingreso03] [money] NULL,
	[Ingreso04] [money] NULL,
	[Ingreso05] [money] NULL,
	[Ingreso06] [money] NULL,
	[Ingreso07] [money] NULL,
	[Ingreso08] [money] NULL,
	[Ingreso09] [money] NULL,
	[Ingreso10] [money] NULL,
	[Descuento01] [money] NULL,
	[Descuento02] [money] NULL,
	[Descuento03] [money] NULL,
	[Descuento04] [money] NULL,
	[Descuento05] [money] NULL,
	[Descuento06] [money] NULL,
	[Descuento07] [money] NULL,
	[Descuento08] [money] NULL,
	[Descuento09] [money] NULL,
	[Descuento10] [money] NULL,
	[Lugar] [char](15) NOT NULL,
	[AFP] [tinyint] NULL,
	[TipoAfiliado] [tinyint] NULL,
	[CajaSalud] [char](5) NULL,
	[NumeroCheque] [varchar](10) NULL,
	[Financiera] [char](5) NULL,
	[NumeroCuenta] [varchar](25) NULL,
	[Observaciones] [varchar](100) NULL,
 CONSTRAINT [PK_PlanillaDetalle] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoPlanilla] ASC,
	[Numero] ASC,
	[Persona] ASC,
	[Puesto] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PlanillaCambio]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PlanillaCambio](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoPlanilla] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Moneda] [char](5) NOT NULL,
	[TipoCambio] [decimal](9, 6) NOT NULL,
 CONSTRAINT [PK_PlanillaCambio] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoPlanilla] ASC,
	[Numero] ASC,
	[Moneda] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Planilla]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Planilla](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoPlanilla] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Periodo] [smalldatetime] NULL,
	[Fecha] [smalldatetime] NULL,
	[Moneda] [char](5) NOT NULL,
	[Referencia] [varchar](15) NULL,
	[Glosa] [text] NOT NULL,
	[Estado] [tinyint] NULL,
	[TipoDocumentoFinanciero] [char](5) NULL,
	[NumeroDocumentoFinanciero] [int] NULL,
 CONSTRAINT [PK_Planilla] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoPlanilla] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PersonaPar]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PersonaPar](
	[Persona] [char](15) NOT NULL,
	[Parametro] [char](5) NOT NULL,
	[Fecha] [smalldatetime] NOT NULL,
	[Valor] [decimal](18, 9) NULL,
	[Observaciones] [text] NULL,
 CONSTRAINT [PK_PersonaPar] PRIMARY KEY CLUSTERED 
(
	[Persona] ASC,
	[Parametro] ASC,
	[Fecha] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PersonaMovimiento]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PersonaMovimiento](
	[Persona] [char](15) NOT NULL,
	[Fecha] [smalldatetime] NOT NULL,
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoPlanilla] [char](5) NOT NULL,
	[Puesto] [char](15) NOT NULL,
	[FechaIngreso] [smalldatetime] NOT NULL,
	[Lugar] [char](15) NULL,
	[Modalidad] [tinyint] NULL,
	[Referencia] [varchar](25) NULL,
	[TipoSueldo] [tinyint] NULL,
	[Moneda] [char](5) NULL,
	[Monto] [money] NULL,
	[Horas] [money] NULL,
	[Cese] [smalldatetime] NOT NULL,
	[Observaciones] [text] NULL,
 CONSTRAINT [PK_PersonaMovimiento] PRIMARY KEY CLUSTERED 
(
	[Persona] ASC,
	[Fecha] ASC,
	[Entidad] ASC,
	[Programa] ASC,
	[TipoPlanilla] ASC,
	[Puesto] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PersonaIni]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PersonaIni](
	[Persona] [char](15) NOT NULL,
	[Numero] [char](5) NOT NULL,
	[Descripcion] [varchar](100) NOT NULL,
	[Reconocimiento] [varchar](50) NULL,
	[FechaIni] [smalldatetime] NULL,
	[FechaFin] [smalldatetime] NULL,
	[Entidad] [varchar](100) NULL,
	[Lugar] [varchar](50) NULL,
	[Observaciones] [text] NULL,
 CONSTRAINT [PK_PersonaIni] PRIMARY KEY CLUSTERED 
(
	[Persona] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PersonaIdi]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PersonaIdi](
	[Persona] [char](15) NOT NULL,
	[Numero] [char](5) NOT NULL,
	[Descripcion] [varchar](100) NOT NULL,
	[Habla] [tinyint] NULL,
	[Escribe] [tinyint] NULL,
	[Lee] [tinyint] NULL,
	[Titulo] [bit] NULL,
	[FechaExtension] [smalldatetime] NULL,
	[Observaciones] [text] NULL,
 CONSTRAINT [PK_PersonaIdi] PRIMARY KEY CLUSTERED 
(
	[Persona] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PersonaHue]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PersonaHue](
	[Persona] [char](15) NOT NULL,
	[Dedo] [char](2) NOT NULL,
	[Huella] [image] NULL,
	[FechaModificacion] [smalldatetime] NULL,
 CONSTRAINT [PK_PersonaHue] PRIMARY KEY CLUSTERED 
(
	[Persona] ASC,
	[Dedo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PersonaHor]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PersonaHor](
	[Persona] [char](15) NOT NULL,
	[Fecha] [smalldatetime] NOT NULL,
	[Horario] [char](5) NOT NULL,
	[TipoMarcado] [tinyint] NOT NULL,
	[Observaciones] [text] NULL,
	[FechaModificacion] [smalldatetime] NULL,
 CONSTRAINT [PK_PersonaHor] PRIMARY KEY CLUSTERED 
(
	[Persona] ASC,
	[Fecha] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PersonaFot]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PersonaFot](
	[Persona] [char](15) NOT NULL,
	[Foto] [image] NULL,
	[Miniatura] [image] NULL,
 CONSTRAINT [PK_PersonaFot] PRIMARY KEY CLUSTERED 
(
	[Persona] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PersonaFor]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PersonaFor](
	[Persona] [char](15) NOT NULL,
	[Numero] [char](5) NOT NULL,
	[NivelFormacion] [tinyint] NOT NULL,
	[Titulo] [varchar](50) NOT NULL,
	[Especialidad] [varchar](50) NULL,
	[Entidad] [varchar](100) NULL,
	[Lugar] [varchar](50) NULL,
	[FechaIni] [smalldatetime] NULL,
	[FechaFin] [smalldatetime] NULL,
	[FechaExtension] [smalldatetime] NULL,
	[CargaHoraria] [money] NULL,
	[Observaciones] [text] NULL,
 CONSTRAINT [PK_PersonaFor] PRIMARY KEY CLUSTERED 
(
	[Persona] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PersonaFamilia]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PersonaFamilia](
	[Persona] [char](15) NOT NULL,
	[Numero] [char](5) NOT NULL,
	[TipoFamilia] [tinyint] NULL,
	[ApellidoPaterno] [varchar](25) NOT NULL,
	[ApellidoMaterno] [varchar](25) NULL,
	[Nombres] [varchar](25) NOT NULL,
	[Genero] [char](1) NOT NULL,
	[FechaNacimiento] [smalldatetime] NULL,
	[LugarNacimiento] [varchar](30) NULL,
	[DocumentoIdentidad] [varchar](15) NOT NULL,
	[DomicilioDireccion] [varchar](75) NULL,
	[Telefono] [varchar](30) NULL,
	[Observaciones] [text] NULL,
 CONSTRAINT [PK_PersonaFamilia] PRIMARY KEY CLUSTERED 
(
	[Persona] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PersonaExp]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PersonaExp](
	[Persona] [char](15) NOT NULL,
	[Numero] [char](5) NOT NULL,
	[Entidad] [varchar](100) NOT NULL,
	[CargoFuncion] [varchar](100) NULL,
	[Sector] [varchar](50) NULL,
	[Lugar] [varchar](50) NULL,
	[FechaIni] [smalldatetime] NOT NULL,
	[FechaFin] [smalldatetime] NOT NULL,
	[Observaciones] [text] NULL,
 CONSTRAINT [PK_PersonaExp] PRIMARY KEY CLUSTERED 
(
	[Persona] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PersonaDoc]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PersonaDoc](
	[Persona] [char](15) NOT NULL,
	[Numero] [char](5) NOT NULL,
	[Fecha] [smalldatetime] NULL,
	[TipoDoc] [char](5) NOT NULL,
	[Remitente] [varchar](50) NULL,
	[Destinatario] [varchar](50) NOT NULL,
	[Observaciones] [text] NULL,
	[Documento] [char](15) NULL,
 CONSTRAINT [PK_PersonaDoc] PRIMARY KEY CLUSTERED 
(
	[Persona] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PersonaCon]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PersonaCon](
	[Persona] [char](15) NOT NULL,
	[Numero] [char](5) NOT NULL,
	[Descripcion] [varchar](100) NOT NULL,
	[Nivel] [tinyint] NULL,
	[Observaciones] [text] NULL,
 CONSTRAINT [PK_PersonaCon] PRIMARY KEY CLUSTERED 
(
	[Persona] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PersonaCas]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PersonaCas](
	[Persona] [char](15) NOT NULL,
	[Numero] [char](5) NOT NULL,
	[FechaIni] [smalldatetime] NOT NULL,
	[FechaFin] [smalldatetime] NOT NULL,
	[Meses] [smallint] NULL,
	[Dias] [tinyint] NULL,
	[Descripcion] [text] NULL,
 CONSTRAINT [PK_PersonaCas] PRIMARY KEY CLUSTERED 
(
	[Persona] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PersonaCar]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PersonaCar](
	[Persona] [char](15) NOT NULL,
	[Fecha] [smalldatetime] NOT NULL,
	[TipoEscalafon] [tinyint] NULL,
	[Rango] [char](15) NOT NULL,
	[RM] [varchar](25) NULL,
	[Observaciones] [text] NULL,
 CONSTRAINT [PK_PersonaCar] PRIMARY KEY CLUSTERED 
(
	[Persona] ASC,
	[Fecha] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PersonaCap]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PersonaCap](
	[Persona] [char](15) NOT NULL,
	[Numero] [char](5) NOT NULL,
	[TipoCap] [tinyint] NULL,
	[Descripcion] [varchar](100) NOT NULL,
	[Lugar] [varchar](50) NULL,
	[Entidad] [varchar](100) NOT NULL,
	[FechaIni] [smalldatetime] NULL,
	[FechaFin] [smalldatetime] NULL,
	[CargaHoraria] [money] NULL,
	[Observaciones] [text] NULL,
 CONSTRAINT [PK_PersonaCap] PRIMARY KEY CLUSTERED 
(
	[Persona] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PersonaAca]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PersonaAca](
	[Persona] [char](15) NOT NULL,
	[Numero] [char](5) NOT NULL,
	[Lugar] [varchar](50) NULL,
	[Entidad] [varchar](100) NOT NULL,
	[Carrera] [varchar](50) NULL,
	[Asignatura] [varchar](50) NULL,
	[FechaIni] [smalldatetime] NULL,
	[FechaFin] [smalldatetime] NULL,
	[Observaciones] [text] NULL,
 CONSTRAINT [PK_PersonaAca] PRIMARY KEY CLUSTERED 
(
	[Persona] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Persona]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Persona](
	[Codigo] [char](15) NOT NULL,
	[TipoDocumento] [varchar](3) NOT NULL,
	[NumeroDocumento] [varchar](15) NOT NULL,
	[LugarExpedicion] [varchar](2) NULL,
	[ApellidoPaterno] [varchar](25) NULL,
	[ApellidoMaterno] [varchar](25) NOT NULL,
	[ApellidoCasada] [varchar](25) NULL,
	[Nombres] [varchar](25) NOT NULL,
	[Genero] [char](1) NOT NULL,
	[FechaNacimiento] [smalldatetime] NULL,
	[PaisNacimiento] [varchar](30) NULL,
	[DepartamentoNacimiento] [varchar](30) NULL,
	[CiudadNacimiento] [varchar](30) NULL,
	[Nacionalidad] [varchar](25) NULL,
	[EstadoCivil] [char](3) NOT NULL,
	[AFP] [tinyint] NULL,
	[NUA] [varchar](15) NULL,
	[REN] [varchar](15) NULL,
	[TipoAfiliado] [tinyint] NULL,
	[CajaSalud] [char](5) NULL,
	[NumeroSeguro] [varchar](25) NULL,
	[TipoSeguro] [tinyint] NULL,
	[Financiera] [char](5) NOT NULL,
	[TipoCuenta] [tinyint] NULL,
	[NumeroCuenta] [varchar](25) NULL,
	[DomicilioDireccion] [varchar](75) NULL,
	[DomicilioEdificio] [varchar](50) NULL,
	[DomicilioZona] [varchar](30) NULL,
	[LugarResidencia] [varchar](30) NULL,
	[Telefono] [varchar](30) NULL,
	[Celular] [varchar](30) NULL,
	[Email] [varchar](100) NULL,
	[EmailTrabajo] [varchar](100) NULL,
	[Profesion] [varchar](50) NULL,
	[ColegioProfesionales] [varchar](50) NULL,
	[RegistroProfesional] [varchar](25) NULL,
	[NIT] [varchar](15) NULL,
	[Estatura] [money] NULL,
	[Peso] [money] NULL,
	[GrupoSanguineo] [varchar](10) NULL,
	[Incompatibilidad] [varchar](100) NULL,
	[Estado] [varchar](1) NULL,
	[CuentaAuxiliar] [char](15) NULL,
	[Observaciones] [text] NULL,
	[FechaModificacion] [smalldatetime] NULL,
	[Usuario] [char](25) NULL,
 CONSTRAINT [PK_Persona] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PermisoDetalle]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PermisoDetalle](
	[Permiso] [char](15) NOT NULL,
	[Fecha] [smalldatetime] NOT NULL,
	[HoraSalida] [smalldatetime] NOT NULL,
	[HoraRetorno] [smalldatetime] NULL,
	[Dias] [money] NULL,
	[Observaciones] [varchar](100) NULL,
 CONSTRAINT [PK_PermisoDetalle] PRIMARY KEY CLUSTERED 
(
	[Permiso] ASC,
	[Fecha] ASC,
	[HoraSalida] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Permiso]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Permiso](
	[Codigo] [char](15) NOT NULL,
	[Persona] [char](15) NOT NULL,
	[Estado] [tinyint] NULL,
	[FechaSolicitud] [smalldatetime] NULL,
	[TipoPermiso] [char](5) NOT NULL,
	[FechaSalida] [smalldatetime] NULL,
	[FechaRetorno] [smalldatetime] NULL,
	[HoraSalida] [smalldatetime] NOT NULL,
	[HoraRetorno] [smalldatetime] NULL,
	[Tipo] [tinyint] NOT NULL,
	[Observaciones] [text] NULL,
 CONSTRAINT [PK_Permiso] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PerfilEvaluacionDet]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PerfilEvaluacionDet](
	[PerfilEvaluacion] [char](15) NOT NULL,
	[Sigla] [char](15) NOT NULL,
	[Nombre] [varchar](150) NOT NULL,
	[Puntaje] [money] NULL,
	[Descripcion] [text] NULL,
 CONSTRAINT [PK_PerfilEvaluacionDet] PRIMARY KEY CLUSTERED 
(
	[PerfilEvaluacion] ASC,
	[Sigla] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PerfilEvaluacion]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PerfilEvaluacion](
	[Codigo] [char](15) NOT NULL,
	[Nombre] [varchar](150) NOT NULL,
	[TipoPerfilEva] [char](5) NULL,
	[Sigla] [varchar](15) NULL,
	[Descripcion] [text] NULL,
 CONSTRAINT [PK_PerfilEvaluacion] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[ParametroVal]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[ParametroVal](
	[Parametro] [char](5) NOT NULL,
	[Fecha] [smalldatetime] NOT NULL,
	[Valor] [decimal](18, 9) NULL,
 CONSTRAINT [PK_ParametroVal] PRIMARY KEY CLUSTERED 
(
	[Parametro] ASC,
	[Fecha] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Parametro]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Parametro](
	[Codigo] [char](5) NOT NULL,
	[Nombre] [varchar](50) NOT NULL,
 CONSTRAINT [PK_Parametro] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Organizacion]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Organizacion](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[Sigla] [varchar](25) NULL,
	[FormaOrganigrama] [tinyint] NULL,
	[AlineacionSubordinados] [tinyint] NULL,
	[Costo] [char](15) NULL,
	[SubCosto] [char](15) NULL,
	[CuentaCosto] [char](15) NULL,
	[CuentaAuxiliarCosto] [char](15) NULL,
 CONSTRAINT [PK_Organizacion] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[MonedaCam]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[MonedaCam](
	[Moneda] [char](5) NOT NULL,
	[Fecha] [smalldatetime] NOT NULL,
	[TipoCambio] [decimal](9, 6) NOT NULL,
 CONSTRAINT [PK_MonedaCam] PRIMARY KEY CLUSTERED 
(
	[Moneda] ASC,
	[Fecha] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Moneda]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Moneda](
	[Codigo] [char](5) NOT NULL,
	[Nombre] [varchar](25) NOT NULL,
	[Sigla] [varchar](5) NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_Moneda] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Lugar]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Lugar](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[Sigla] [varchar](25) NULL,
	[NumeroPatronal] [varchar](15) NULL,
 CONSTRAINT [PK_Lugar] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[IngresoDetalle]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[IngresoDetalle](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoPlanilla] [char](5) NOT NULL,
	[TipoID] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Persona] [char](15) NOT NULL,
	[Puesto] [char](15) NOT NULL,
	[Fecha] [smalldatetime] NULL,
	[Valor01] [money] NULL,
	[Valor02] [money] NULL,
	[Valor03] [money] NULL,
	[Valor04] [money] NULL,
	[Valor05] [money] NULL,
	[Meses] [money] NULL,
	[Dias] [money] NULL,
	[Cantidad] [decimal](18, 9) NULL,
	[Monto] [money] NULL,
	[Descuento] [money] NULL,
	[Total] [money] NULL,
	[Lugar] [char](15) NULL,
	[NumeroCheque] [varchar](10) NULL,
	[Financiera] [char](5) NULL,
	[NumeroCuenta] [varchar](25) NULL,
	[Observaciones] [varchar](100) NULL,
 CONSTRAINT [PK_IngresoDetalle] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoPlanilla] ASC,
	[TipoID] ASC,
	[Numero] ASC,
	[Persona] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[IngresoCambio]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[IngresoCambio](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoPlanilla] [char](5) NOT NULL,
	[TipoID] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Moneda] [char](5) NOT NULL,
	[TipoCambio] [decimal](9, 6) NOT NULL,
 CONSTRAINT [PK_IngresoCambio] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoPlanilla] ASC,
	[TipoID] ASC,
	[Numero] ASC,
	[Moneda] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Ingreso]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Ingreso](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoPlanilla] [char](5) NOT NULL,
	[TipoID] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Periodo] [smalldatetime] NULL,
	[Fecha] [smalldatetime] NULL,
	[Moneda] [char](5) NOT NULL,
	[Referencia] [varchar](15) NULL,
	[Glosa] [text] NOT NULL,
	[Estado] [tinyint] NULL,
 CONSTRAINT [PK_Ingreso] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoPlanilla] ASC,
	[TipoID] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[HorarioDet]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[HorarioDet](
	[Horario] [char](5) NOT NULL,
	[Dia] [tinyint] NOT NULL,
	[Turno] [char](5) NOT NULL,
	[HoraEntrada] [smalldatetime] NULL,
	[ToleranciaEntrada] [smallint] NULL,
	[HoraSalida] [smalldatetime] NULL,
	[ToleranciaSalida] [smallint] NULL,
 CONSTRAINT [PK_HorarioDet] PRIMARY KEY CLUSTERED 
(
	[Horario] ASC,
	[Dia] ASC,
	[Turno] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Horario]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Horario](
	[Codigo] [char](5) NOT NULL,
	[Nombre] [varchar](100) NOT NULL,
	[PesoAsistencia] [money] NULL,
	[PesoAusencia] [money] NULL,
	[PesoExtra] [money] NULL,
	[MargenMarcado] [smallint] NOT NULL,
	[SoloHorasPico] [bit] NULL,
	[Descripcion] [text] NULL,
 CONSTRAINT [PK_Horario] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Gasto]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Gasto](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[CodigoEDT] [varchar](25) NULL,
	[NombreAlternativo] [varchar](150) NULL,
	[Descripcion] [text] NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_Gasto] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Entidad]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Entidad](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[Sigla] [varchar](25) NULL,
	[CodigoEDT] [varchar](25) NULL,
	[NombreAlternativo] [varchar](150) NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_Entidad] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[DocumentoFinancieroTesoreria]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[DocumentoFinancieroTesoreria](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoDocumentoFinanciero] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Fila] [int] NOT NULL,
	[Cuenta] [char](15) NOT NULL,
	[CuentaAuxiliar] [char](15) NULL,
	[Monto1] [money] NULL,
	[Monto2] [money] NULL,
	[Monto3] [money] NULL,
	[Monto4] [money] NULL,
	[Monto9] [money] NULL,
	[Concepto] [varchar](100) NOT NULL,
	[NumeroCheque] [varchar](15) NULL,
	[Beneficiario] [varchar](100) NULL,
	[NumeroDocumento] [char](15) NULL,
 CONSTRAINT [PK_DocumentoFinancieroTesoreria] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoDocumentoFinanciero] ASC,
	[Numero] ASC,
	[Fila] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[DocumentoFinancieroPresupuesto]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[DocumentoFinancieroPresupuesto](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoDocumentoFinanciero] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Fila] [int] NOT NULL,
	[Recurso] [char](15) NOT NULL,
	[Poa] [char](15) NOT NULL,
	[Gasto] [char](15) NOT NULL,
	[VariablePresupuesto1] [char](15) NOT NULL,
	[VariablePresupuesto2] [char](15) NOT NULL,
	[VariablePresupuesto3] [char](15) NOT NULL,
	[VariablePresupuesto4] [char](15) NOT NULL,
	[VariablePresupuesto5] [char](15) NOT NULL,
	[Monto1] [money] NULL,
	[Monto2] [money] NULL,
	[Monto3] [money] NULL,
	[Monto4] [money] NULL,
	[Monto9] [money] NULL,
	[Concepto] [varchar](100) NOT NULL,
 CONSTRAINT [PK_DocumentoFinancieroPresupuesto] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoDocumentoFinanciero] ASC,
	[Numero] ASC,
	[Fila] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[DocumentoFinancieroIva]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[DocumentoFinancieroIva](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoDocumentoFinanciero] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Fila] [int] NOT NULL,
	[TipoLibro] [tinyint] NULL,
	[TipoFactura] [tinyint] NULL,
	[Nit] [varchar](15) NOT NULL,
	[RazonSocial] [varchar](100) NOT NULL,
	[FechaFactura] [smalldatetime] NOT NULL,
	[NumeroFactura] [bigint] NULL,
	[NumeroPoliza] [varchar](15) NOT NULL,
	[ImporteFactura] [money] NULL,
	[ImporteExento] [money] NULL,
	[ImporteIce] [money] NULL,
	[ImporteImpuesto] [money] NULL,
	[NumeroAutorizacion] [bigint] NOT NULL,
	[CodigoControl] [varchar](15) NOT NULL,
	[EstadoFactura] [tinyint] NULL,
 CONSTRAINT [PK_DocumentoFinancieroIva] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoDocumentoFinanciero] ASC,
	[Numero] ASC,
	[Fila] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[DocumentoFinancieroGasto]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[DocumentoFinancieroGasto](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoDocumentoFinanciero] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Fila] [int] NOT NULL,
	[TipoGasto] [char](5) NOT NULL,
	[FechaGasto] [smalldatetime] NOT NULL,
	[FormaPago] [tinyint] NOT NULL,
	[NombreProveedor] [varchar](100) NOT NULL,
	[NumeroRecibo] [varchar](15) NULL,
 CONSTRAINT [PK_DocumentoFinancieroGasto] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoDocumentoFinanciero] ASC,
	[Numero] ASC,
	[Fila] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[DocumentoFinancieroContabilidad]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[DocumentoFinancieroContabilidad](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoDocumentoFinanciero] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Fila] [int] NOT NULL,
	[Costo] [char](15) NULL,
	[SubCosto] [char](15) NULL,
	[Cuenta] [char](15) NOT NULL,
	[CuentaAuxiliar] [char](15) NULL,
	[Monto1] [money] NULL,
	[Monto2] [money] NULL,
	[Monto3] [money] NULL,
	[Monto4] [money] NULL,
	[Monto9] [money] NULL,
	[Concepto] [varchar](100) NOT NULL,
	[NumeroCheque] [varchar](15) NULL,
	[Beneficiario] [varchar](100) NULL,
	[NumeroDocumento] [char](15) NULL,
	[FechaInicial] [smalldatetime] NULL,
	[FechaFinal] [smalldatetime] NULL,
 CONSTRAINT [PK_DocumentoFinancieroContabilidad] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoDocumentoFinanciero] ASC,
	[Numero] ASC,
	[Fila] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[DocumentoFinancieroCambio]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[DocumentoFinancieroCambio](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoDocumentoFinanciero] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Moneda] [char](5) NOT NULL,
	[TipoCambio] [decimal](9, 6) NOT NULL,
 CONSTRAINT [PK_DocumentoFinancieroCambio] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoDocumentoFinanciero] ASC,
	[Numero] ASC,
	[Moneda] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[DocumentoFinancieroBancarizacion]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[DocumentoFinancieroBancarizacion](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoDocumentoFinanciero] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Fila] [int] NOT NULL,
	[TipoBancarizacion] [tinyint] NULL,
	[ModalidadTransaccion] [tinyint] NULL,
	[FechaFactura] [smalldatetime] NOT NULL,
	[TipoTransaccion] [tinyint] NULL,
	[Nit] [varchar](15) NOT NULL,
	[RazonSocial] [varchar](100) NOT NULL,
	[NumeroFactura] [varchar](15) NULL,
	[MontoFactura] [money] NULL,
	[NumeroAutorizacion] [bigint] NOT NULL,
	[NumeroCuenta] [varchar](15) NULL,
	[MontoDocumento] [money] NULL,
	[MontoAcumulado] [money] NULL,
	[NitEntidadFinanciera] [bigint] NULL,
	[NumeroDocumento] [varchar](15) NULL,
	[TipoDocumento] [tinyint] NULL,
	[FechaDocumento] [smalldatetime] NOT NULL,
 CONSTRAINT [PK_DocumentoFinancieroBancarizacion] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoDocumentoFinanciero] ASC,
	[Numero] ASC,
	[Fila] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[DocumentoFinanciero]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[DocumentoFinanciero](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoDocumentoFinanciero] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Fecha] [smalldatetime] NULL,
	[Moneda] [char](5) NOT NULL,
	[Presupuestado] [bit] NULL,
	[Prevenido] [bit] NULL,
	[Comprometido] [bit] NULL,
	[Devengado] [bit] NULL,
	[Ejecutado] [bit] NULL,
	[Referencia] [varchar](15) NULL,
	[Beneficiario] [varchar](100) NULL,
	[Concepto] [text] NOT NULL,
	[Estado] [tinyint] NULL,
	[ModuloOrigen] [tinyint] NULL,
	[TipoDocumentoFinancieroOriginal] [char](5) NULL,
	[NumeroOriginal] [int] NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_DocumentoFinanciero] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoDocumentoFinanciero] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[DocumentoConciliacionDetalle]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[DocumentoConciliacionDetalle](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoDocumentoConciliacion] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Fila] [int] NOT NULL,
	[Origen] [tinyint] NULL,
	[Causa] [tinyint] NULL,
	[Fecha] [smalldatetime] NULL,
	[Monto] [money] NULL,
	[NumeroCheque] [char](15) NULL,
	[Beneficiario] [varchar](100) NULL,
	[Concepto] [varchar](100) NOT NULL,
 CONSTRAINT [PK_DocumentoConciliacionDetalle] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoDocumentoConciliacion] ASC,
	[Numero] ASC,
	[Fila] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[DocumentoConciliacion]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[DocumentoConciliacion](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoDocumentoConciliacion] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[FechaInicial] [smalldatetime] NULL,
	[FechaFinal] [smalldatetime] NULL,
	[Cuenta] [char](15) NOT NULL,
	[CuentaAuxiliar] [char](15) NULL,
	[Moneda] [char](5) NOT NULL,
	[SaldoBanco] [money] NULL,
	[Concepto] [text] NOT NULL,
	[Estado] [tinyint] NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_DocumentoConciliacion] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoDocumentoConciliacion] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[DocumentoArticuloDetalle]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[DocumentoArticuloDetalle](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[AlmacenArticulo] [char](15) NOT NULL,
	[TipoDocumentoArticulo] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Fila] [int] NOT NULL,
	[Articulo] [char](15) NOT NULL,
	[Lote] [char](15) NOT NULL,
	[CantidadPedida] [money] NOT NULL,
	[Cantidad] [money] NOT NULL,
	[CostoUnitario] [money] NOT NULL,
	[CostoTotal] [money] NOT NULL,
	[Observaciones] [varchar](100) NULL,
	[Vencimiento] [smalldatetime] NULL,
 CONSTRAINT [PK_DocumentoArticuloDetalle] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[AlmacenArticulo] ASC,
	[TipoDocumentoArticulo] ASC,
	[Numero] ASC,
	[Fila] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[DocumentoArticuloCambio]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[DocumentoArticuloCambio](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[AlmacenArticulo] [char](15) NOT NULL,
	[TipoDocumentoArticulo] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Moneda] [char](5) NOT NULL,
	[TipoCambio] [decimal](9, 6) NOT NULL,
 CONSTRAINT [PK_DocumentoArticuloCambio] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[AlmacenArticulo] ASC,
	[TipoDocumentoArticulo] ASC,
	[Numero] ASC,
	[Moneda] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[DocumentoArticulo]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[DocumentoArticulo](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[AlmacenArticulo] [char](15) NOT NULL,
	[TipoDocumentoArticulo] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Fecha] [smalldatetime] NULL,
	[Moneda] [char](5) NOT NULL,
	[Proveedor] [char](15) NOT NULL,
	[Organizacion] [char](15) NOT NULL,
	[Persona] [char](15) NOT NULL,
	[Costo] [char](15) NOT NULL,
	[SubCosto] [char](15) NOT NULL,
	[CuentaCosto] [char](15) NOT NULL,
	[Concepto] [text] NOT NULL,
	[Estado] [tinyint] NULL,
	[Usuario] [char](25) NULL,
	[TipoDocumentoFinanciero] [char](5) NULL,
	[NumeroDocumentoFinanciero] [int] NULL,
 CONSTRAINT [PK_DocumentoArticulo] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[AlmacenArticulo] ASC,
	[TipoDocumentoArticulo] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[DocumentoActivoDetalle]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[DocumentoActivoDetalle](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoDocumentoActivo] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Activo] [char](15) NOT NULL,
	[MesesVidaUtil] [smallint] NULL,
	[DiasVidaUtil] [smallint] NULL,
	[MesesDepreciado] [smallint] NULL,
	[DiasDepreciado] [smallint] NULL,
	[Valor] [money] NULL,
	[Depreciacion] [money] NULL,
	[Observaciones] [varchar](100) NULL,
 CONSTRAINT [PK_DocumentoActivoDetalle] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoDocumentoActivo] ASC,
	[Numero] ASC,
	[Activo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[DocumentoActivoCambio]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[DocumentoActivoCambio](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoDocumentoActivo] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Moneda] [char](5) NOT NULL,
	[TipoCambio] [decimal](9, 6) NOT NULL,
 CONSTRAINT [PK_DocumentoActivoCambio] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoDocumentoActivo] ASC,
	[Numero] ASC,
	[Moneda] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[DocumentoActivo]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[DocumentoActivo](
	[Entidad] [char](15) NOT NULL,
	[Programa] [char](15) NOT NULL,
	[TipoDocumentoActivo] [char](5) NOT NULL,
	[Numero] [int] NOT NULL,
	[Fecha] [smalldatetime] NULL,
	[Moneda] [char](5) NOT NULL,
	[Proveedor] [char](15) NOT NULL,
	[Ubicacion] [char](15) NOT NULL,
	[Organizacion] [char](15) NOT NULL,
	[Persona] [char](15) NOT NULL,
	[Concepto] [text] NOT NULL,
	[Estado] [tinyint] NULL,
	[TipoDocumentoFinanciero] [char](5) NULL,
	[NumeroDocumentoFinanciero] [int] NULL,
 CONSTRAINT [PK_DocumentoActivo] PRIMARY KEY CLUSTERED 
(
	[Entidad] ASC,
	[Programa] ASC,
	[TipoDocumentoActivo] ASC,
	[Numero] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Documento]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Documento](
	[Codigo] [char](15) NOT NULL,
	[Titulo] [varchar](255) NULL,
	[Referencia] [varchar](50) NULL,
	[Clave] [varchar](50) NULL,
	[Autor] [char](25) NULL,
	[Expediente] [char](15) NULL,
	[Archivo] [image] NULL,
	[FechaCreacion] [smalldatetime] NULL,
	[Extension] [varchar](15) NULL,
	[Tema] [char](15) NULL,
 CONSTRAINT [PK_Documento] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[CuentaAuxiliar]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[CuentaAuxiliar](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[Cuenta] [char](15) NULL,
	[NumeroCuenta] [varchar](25) NULL,
	[CodigoEDT] [varchar](25) NULL,
	[NombreAlternativo] [varchar](150) NULL,
	[Moneda] [char](5) NOT NULL,
	[Descripcion] [text] NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_CuentaAuxiliar] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Cuenta]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Cuenta](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[Saldo] [tinyint] NULL,
	[ConAuxiliares] [bit] NULL,
	[NumeroCuenta] [varchar](25) NULL,
	[CodigoEDT] [varchar](25) NULL,
	[NombreAlternativo] [varchar](150) NULL,
	[Moneda] [char](5) NOT NULL,
	[Descripcion] [text] NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_Cuenta] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Costo]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Costo](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[CodigoEDT] [varchar](25) NULL,
	[NombreAlternativo] [varchar](150) NULL,
	[Descripcion] [text] NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_Costo] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[ContratoDet]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[ContratoDet](
	[Contrato] [char](15) NOT NULL,
	[Fecha] [smalldatetime] NOT NULL,
	[Monto] [money] NULL,
	[Moneda] [char](5) NULL,
	[Observaciones] [varchar](100) NULL,
 CONSTRAINT [PK_ContratoDet] PRIMARY KEY CLUSTERED 
(
	[Contrato] ASC,
	[Fecha] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Contrato]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Contrato](
	[Codigo] [char](15) NOT NULL,
	[Referencia] [varchar](15) NULL,
	[Persona] [char](15) NULL,
	[TipoCon] [char](5) NULL,
	[FechaFirma] [smalldatetime] NULL,
	[FechaInicio] [smalldatetime] NULL,
	[TDRs] [text] NULL,
	[Objeto] [text] NULL,
	[Observaciones] [text] NULL,
 CONSTRAINT [PK_Contrato] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Config]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Config](
	[Codigo] [char](50) NOT NULL,
	[Valor] [text] NOT NULL,
	[Descripcion] [text] NULL,
	[FechaModificacion] [datetime] NULL,
 CONSTRAINT [PK_Config] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[CategoriaProveedor]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[CategoriaProveedor](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[Sigla] [varchar](25) NULL,
	[Mascara] [varchar](25) NULL,
	[Descripcion] [text] NULL,
 CONSTRAINT [PK_CategoriaProveedor] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[CategoriaArticulo]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[CategoriaArticulo](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[Sigla] [varchar](25) NULL,
	[Mascara] [varchar](25) NULL,
	[Caracteristicas] [text] NULL,
 CONSTRAINT [PK_CategoriaArticulo] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[CategoriaActivo]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[CategoriaActivo](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[Sigla] [varchar](25) NULL,
	[Mascara] [varchar](25) NULL,
	[MesesVidaUtil] [smallint] NULL,
	[DiasVidaUtil] [smallint] NULL,
	[Deprecia] [bit] NULL,
	[Caracteristicas] [text] NULL,
 CONSTRAINT [PK_CategoriaActivo] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Cargo]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Cargo](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[Sigla] [varchar](25) NULL,
	[Moneda] [char](5) NOT NULL,
	[Monto] [money] NULL,
	[Mascara] [varchar](25) NULL,
	[Clase] [tinyint] NULL,
	[Descripcion] [text] NULL,
 CONSTRAINT [PK_Cargo] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[CajaSalud]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[CajaSalud](
	[Codigo] [char](5) NOT NULL,
	[Nombre] [varchar](100) NOT NULL,
	[NumeroPatronal] [varchar](25) NULL,
	[DireccionEntidad] [varchar](100) NULL,
 CONSTRAINT [PK_CajaSalud] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[AsistenciaDet]    Script Date: 03/23/2015 11:26:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[AsistenciaDet](
	[Codigo] [int] NOT NULL,
	[Persona] [char](15) NOT NULL,
	[Fecha] [datetime] NOT NULL,
	[TipoMarcado] [tinyint] NULL,
	[ControlMarcado] [tinyint] NULL,
	[FechaModificacion] [smalldatetime] NULL,
 CONSTRAINT [PK_AsistenciaDet] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC,
	[Persona] ASC,
	[Fecha] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Asistencia]    Script Date: 03/23/2015 11:26:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Asistencia](
	[Persona] [char](15) NOT NULL,
	[Fecha] [smalldatetime] NOT NULL,
	[Horario] [char](5) NOT NULL,
	[Turno] [char](5) NOT NULL,
	[HoraEntrada] [smalldatetime] NULL,
	[HoraSalida] [smalldatetime] NULL,
	[TipoEntrada] [tinyint] NOT NULL,
	[TipoSalida] [tinyint] NOT NULL,
	[ControlEntrada] [tinyint] NOT NULL,
	[ControlSalida] [tinyint] NOT NULL,
	[Observaciones] [varchar](100) NULL,
	[FechaModificacion] [smalldatetime] NULL,
 CONSTRAINT [PK_Asistencia] PRIMARY KEY CLUSTERED 
(
	[Persona] ASC,
	[Fecha] ASC,
	[Horario] ASC,
	[Turno] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[ArticuloImagen]    Script Date: 03/23/2015 11:26:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[ArticuloImagen](
	[Articulo] [char](15) NOT NULL,
	[Imagen] [image] NULL,
	[Miniatura] [image] NULL,
 CONSTRAINT [PK_ArticuloImagen] PRIMARY KEY CLUSTERED 
(
	[Articulo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Articulo]    Script Date: 03/23/2015 11:26:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Articulo](
	[Codigo] [char](15) NOT NULL,
	[Nombre] [varchar](150) NOT NULL,
	[Unidad] [varchar](15) NOT NULL,
	[Propiedad1] [varchar](50) NULL,
	[Propiedad2] [varchar](50) NULL,
	[Propiedad3] [varchar](50) NULL,
	[Propiedad4] [varchar](50) NULL,
	[Caracteristicas] [text] NULL,
	[Referencia] [varchar](15) NULL,
	[CategoriaArticulo] [char](15) NOT NULL,
	[StockMinimo] [money] NULL,
	[StockMaximo] [money] NULL,
	[PedidoMaximo] [money] NULL,
	[CostoUnitario] [money] NULL,
	[CuentaRealizable] [char](15) NULL,
	[CuentaAuxiliar] [char](15) NULL,
	[Costo] [char](15) NULL,
	[CuentaCosto] [char](15) NULL,
	[Observaciones] [text] NULL,
 CONSTRAINT [PK_Articulo] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[AntiguedadParDet]    Script Date: 03/23/2015 11:26:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[AntiguedadParDet](
	[AntiguedadPar] [char](5) NOT NULL,
	[Inicio] [int] NOT NULL,
	[Fin] [int] NULL,
	[Porcentaje] [money] NULL,
 CONSTRAINT [PK_AntiguedadParDet] PRIMARY KEY CLUSTERED 
(
	[AntiguedadPar] ASC,
	[Inicio] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[AntiguedadPar]    Script Date: 03/23/2015 11:26:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[AntiguedadPar](
	[Codigo] [char](5) NOT NULL,
	[Nombre] [varchar](50) NOT NULL,
	[Fecha] [smalldatetime] NOT NULL,
	[Descripcion] [text] NULL,
 CONSTRAINT [PK_AntiguedadPar] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[AlmacenArticulo]    Script Date: 03/23/2015 11:26:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[AlmacenArticulo](
	[Codigo] [char](15) NOT NULL,
	[Padre] [char](15) NULL,
	[Nivel] [tinyint] NULL,
	[Ramas] [bit] NULL,
	[Nombre] [varchar](150) NOT NULL,
	[Sigla] [varchar](25) NULL,
 CONSTRAINT [PK_AlmacenArticulo] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[ActivoImagen]    Script Date: 03/23/2015 11:26:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[ActivoImagen](
	[Activo] [char](15) NOT NULL,
	[Imagen] [image] NULL,
	[Miniatura] [image] NULL,
 CONSTRAINT [PK_ActivoImagen] PRIMARY KEY CLUSTERED 
(
	[Activo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Activo]    Script Date: 03/23/2015 11:26:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Activo](
	[Codigo] [char](15) NOT NULL,
	[CategoriaActivo] [char](15) NOT NULL,
	[Nombre] [varchar](150) NOT NULL,
	[Caracteristicas] [text] NULL,
	[Unidad] [varchar](15) NOT NULL,
	[Cantidad] [int] NULL,
	[Referencia] [varchar](15) NULL,
	[FechaCompra] [smalldatetime] NULL,
	[ValorCompra] [money] NULL,
	[Moneda] [char](5) NOT NULL,
	[FechaAlta] [smalldatetime] NULL,
	[FechaRevaluo] [smalldatetime] NULL,
	[FechaBaja] [smalldatetime] NULL,
	[MesesVidaUtil] [smallint] NULL,
	[DiasVidaUtil] [smallint] NULL,
	[Deprecia] [bit] NULL,
	[CuentaActivo] [char](15) NULL,
	[CuentaAuxiliar] [char](15) NULL,
	[Costo] [char](15) NULL,
	[SubCosto] [char](15) NULL,
	[CuentaCosto] [char](15) NULL,
	[Observaciones] [text] NULL,
 CONSTRAINT [PK_Activo] PRIMARY KEY CLUSTERED 
(
	[Codigo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Default [DF__Activo__Codigo__253C7D7E]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Activo__Categori__2630A1B7]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ('') FOR [CategoriaActivo]
GO
/****** Object:  Default [DF__Activo__Nombre__2724C5F0]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Activo__Caracter__2818EA29]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ('') FOR [Caracteristicas]
GO
/****** Object:  Default [DF__Activo__Unidad__290D0E62]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ('Pieza') FOR [Unidad]
GO
/****** Object:  Default [DF__Activo__Cantidad__2A01329B]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ((1)) FOR [Cantidad]
GO
/****** Object:  Default [DF__Activo__Referenc__2AF556D4]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ('') FOR [Referencia]
GO
/****** Object:  Default [DF__Activo__FechaCom__2BE97B0D]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ('06/06/2079') FOR [FechaCompra]
GO
/****** Object:  Default [DF__Activo__ValorCom__2CDD9F46]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ((0.0)) FOR [ValorCompra]
GO
/****** Object:  Default [DF__Activo__Moneda__2DD1C37F]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ('1') FOR [Moneda]
GO
/****** Object:  Default [DF__Activo__FechaAlt__2EC5E7B8]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ('01/01/1900') FOR [FechaAlta]
GO
/****** Object:  Default [DF__Activo__FechaRev__2FBA0BF1]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ('01/01/1900') FOR [FechaRevaluo]
GO
/****** Object:  Default [DF__Activo__FechaBaj__30AE302A]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ('01/01/1900') FOR [FechaBaja]
GO
/****** Object:  Default [DF__Activo__MesesVid__31A25463]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ((0)) FOR [MesesVidaUtil]
GO
/****** Object:  Default [DF__Activo__DiasVida__3296789C]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ((0)) FOR [DiasVidaUtil]
GO
/****** Object:  Default [DF__Activo__Deprecia__338A9CD5]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ((-1)) FOR [Deprecia]
GO
/****** Object:  Default [DF__Activo__CuentaAc__347EC10E]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ('') FOR [CuentaActivo]
GO
/****** Object:  Default [DF__Activo__CuentaAu__3572E547]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ('') FOR [CuentaAuxiliar]
GO
/****** Object:  Default [DF__Activo__Costo__36670980]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ('') FOR [Costo]
GO
/****** Object:  Default [DF__Activo__SubCosto__375B2DB9]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ('') FOR [SubCosto]
GO
/****** Object:  Default [DF__Activo__CuentaCo__384F51F2]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ('') FOR [CuentaCosto]
GO
/****** Object:  Default [DF__Activo__Observac__3943762B]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Activo] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__ActivoIma__Activ__3C1FE2D6]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[ActivoImagen] ADD  DEFAULT ('') FOR [Activo]
GO
/****** Object:  Default [DF__AlmacenAr__Codig__53C2623D]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[AlmacenArticulo] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__AlmacenAr__Padre__54B68676]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[AlmacenArticulo] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__AlmacenAr__Nivel__55AAAAAF]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[AlmacenArticulo] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__AlmacenAr__Ramas__569ECEE8]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[AlmacenArticulo] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__AlmacenAr__Nombr__5792F321]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[AlmacenArticulo] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__AlmacenAr__Sigla__5887175A]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[AlmacenArticulo] ADD  DEFAULT ('') FOR [Sigla]
GO
/****** Object:  Default [DF__Antigueda__Codig__5AEE82B9]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[AntiguedadPar] ADD  DEFAULT ('000') FOR [Codigo]
GO
/****** Object:  Default [DF__Antigueda__Nombr__5BE2A6F2]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[AntiguedadPar] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Antigueda__Fecha__5CD6CB2B]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[AntiguedadPar] ADD  DEFAULT ('06/06/2079') FOR [Fecha]
GO
/****** Object:  Default [DF__Antigueda__Descr__5DCAEF64]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[AntiguedadPar] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__Antigueda__Antig__66603565]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[AntiguedadParDet] ADD  DEFAULT ('') FOR [AntiguedadPar]
GO
/****** Object:  Default [DF__Antigueda__Inici__6754599E]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[AntiguedadParDet] ADD  DEFAULT ((0)) FOR [Inicio]
GO
/****** Object:  Default [DF__AntiguedadP__Fin__68487DD7]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[AntiguedadParDet] ADD  DEFAULT ((0)) FOR [Fin]
GO
/****** Object:  Default [DF__Antigueda__Porce__693CA210]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[AntiguedadParDet] ADD  DEFAULT ((0.00)) FOR [Porcentaje]
GO
/****** Object:  Default [DF__Articulo__Codigo__049AA3C2]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Articulo] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Articulo__Nombre__058EC7FB]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Articulo] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Articulo__Unidad__0682EC34]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Articulo] ADD  DEFAULT ('Pieza') FOR [Unidad]
GO
/****** Object:  Default [DF__Articulo__Propie__0777106D]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Articulo] ADD  DEFAULT ('') FOR [Propiedad1]
GO
/****** Object:  Default [DF__Articulo__Propie__086B34A6]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Articulo] ADD  DEFAULT ('') FOR [Propiedad2]
GO
/****** Object:  Default [DF__Articulo__Propie__095F58DF]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Articulo] ADD  DEFAULT ('') FOR [Propiedad3]
GO
/****** Object:  Default [DF__Articulo__Propie__0A537D18]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Articulo] ADD  DEFAULT ('') FOR [Propiedad4]
GO
/****** Object:  Default [DF__Articulo__Caract__0B47A151]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Articulo] ADD  DEFAULT ('') FOR [Caracteristicas]
GO
/****** Object:  Default [DF__Articulo__Refere__0C3BC58A]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Articulo] ADD  DEFAULT ('') FOR [Referencia]
GO
/****** Object:  Default [DF__Articulo__Catego__0D2FE9C3]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Articulo] ADD  DEFAULT ('') FOR [CategoriaArticulo]
GO
/****** Object:  Default [DF__Articulo__StockM__0E240DFC]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Articulo] ADD  DEFAULT ((0.0)) FOR [StockMinimo]
GO
/****** Object:  Default [DF__Articulo__StockM__0F183235]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Articulo] ADD  DEFAULT ((0.0)) FOR [StockMaximo]
GO
/****** Object:  Default [DF__Articulo__Pedido__100C566E]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Articulo] ADD  DEFAULT ((0.00)) FOR [PedidoMaximo]
GO
/****** Object:  Default [DF__Articulo__CostoU__11007AA7]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Articulo] ADD  DEFAULT ((0.00)) FOR [CostoUnitario]
GO
/****** Object:  Default [DF__Articulo__Cuenta__11F49EE0]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Articulo] ADD  DEFAULT ('') FOR [CuentaRealizable]
GO
/****** Object:  Default [DF__Articulo__Cuenta__12E8C319]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Articulo] ADD  DEFAULT ('') FOR [CuentaAuxiliar]
GO
/****** Object:  Default [DF__Articulo__Costo__13DCE752]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Articulo] ADD  DEFAULT ('') FOR [Costo]
GO
/****** Object:  Default [DF__Articulo__Cuenta__14D10B8B]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Articulo] ADD  DEFAULT ('') FOR [CuentaCosto]
GO
/****** Object:  Default [DF__Articulo__Observ__15C52FC4]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Articulo] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__ArticuloI__Artic__18A19C6F]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[ArticuloImagen] ADD  DEFAULT ('') FOR [Articulo]
GO
/****** Object:  Default [DF__Asistenci__Perso__07C12930]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Asistencia] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__Asistenci__Fecha__08B54D69]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Asistencia] ADD  DEFAULT ('06/06/2079') FOR [Fecha]
GO
/****** Object:  Default [DF__Asistenci__Horar__09A971A2]    Script Date: 03/23/2015 11:26:10 ******/
ALTER TABLE [dbo].[Asistencia] ADD  DEFAULT ('') FOR [Horario]
GO
/****** Object:  Default [DF__Asistenci__Turno__0A9D95DB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Asistencia] ADD  DEFAULT ('') FOR [Turno]
GO
/****** Object:  Default [DF__Asistenci__HoraE__0B91BA14]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Asistencia] ADD  DEFAULT ('06/06/2079') FOR [HoraEntrada]
GO
/****** Object:  Default [DF__Asistenci__HoraS__0C85DE4D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Asistencia] ADD  DEFAULT ('06/06/2079') FOR [HoraSalida]
GO
/****** Object:  Default [DF__Asistenci__TipoE__0D7A0286]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Asistencia] ADD  DEFAULT ((2)) FOR [TipoEntrada]
GO
/****** Object:  Default [DF__Asistenci__TipoS__0E6E26BF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Asistencia] ADD  DEFAULT ((2)) FOR [TipoSalida]
GO
/****** Object:  Default [DF__Asistenci__Contr__0F624AF8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Asistencia] ADD  DEFAULT ((255)) FOR [ControlEntrada]
GO
/****** Object:  Default [DF__Asistenci__Contr__10566F31]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Asistencia] ADD  DEFAULT ((255)) FOR [ControlSalida]
GO
/****** Object:  Default [DF__Asistenci__Obser__114A936A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Asistencia] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__Asistenci__Fecha__123EB7A3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Asistencia] ADD  DEFAULT ('06/06/2079') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__Asistenci__Codig__151B244E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[AsistenciaDet] ADD  DEFAULT ((9999)) FOR [Codigo]
GO
/****** Object:  Default [DF__Asistenci__Perso__160F4887]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[AsistenciaDet] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__Asistenci__Fecha__17036CC0]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[AsistenciaDet] ADD  DEFAULT ('06/06/2079') FOR [Fecha]
GO
/****** Object:  Default [DF__Asistenci__TipoM__17F790F9]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[AsistenciaDet] ADD  DEFAULT ((2)) FOR [TipoMarcado]
GO
/****** Object:  Default [DF__Asistenci__Contr__18EBB532]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[AsistenciaDet] ADD  DEFAULT ((255)) FOR [ControlMarcado]
GO
/****** Object:  Default [DF__Asistenci__Fecha__19DFD96B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[AsistenciaDet] ADD  DEFAULT ('06/06/2079') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__CajaSalud__Codig__618671AF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CajaSalud] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__CajaSalud__Nombr__627A95E8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CajaSalud] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__CajaSalud__Numer__636EBA21]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CajaSalud] ADD  DEFAULT ('') FOR [NumeroPatronal]
GO
/****** Object:  Default [DF__CajaSalud__Direc__6462DE5A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CajaSalud] ADD  DEFAULT ('') FOR [DireccionEntidad]
GO
/****** Object:  Default [DF__Cargo__Codigo__367C1819]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cargo] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Cargo__Padre__37703C52]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cargo] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__Cargo__Nivel__3864608B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cargo] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__Cargo__Ramas__395884C4]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cargo] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__Cargo__Nombre__3A4CA8FD]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cargo] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Cargo__Sigla__3B40CD36]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cargo] ADD  DEFAULT ('') FOR [Sigla]
GO
/****** Object:  Default [DF__Cargo__Moneda__3C34F16F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cargo] ADD  DEFAULT ('1') FOR [Moneda]
GO
/****** Object:  Default [DF__Cargo__Monto__3D2915A8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cargo] ADD  DEFAULT ((0.00)) FOR [Monto]
GO
/****** Object:  Default [DF__Cargo__Mascara__3E1D39E1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cargo] ADD  DEFAULT ('') FOR [Mascara]
GO
/****** Object:  Default [DF__Cargo__Clase__3F115E1A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cargo] ADD  DEFAULT ((0)) FOR [Clase]
GO
/****** Object:  Default [DF__Cargo__Descripci__40058253]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cargo] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__Categoria__Codig__18D6A699]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaActivo] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Categoria__Padre__19CACAD2]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaActivo] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__Categoria__Nivel__1ABEEF0B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaActivo] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__Categoria__Ramas__1BB31344]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaActivo] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__Categoria__Nombr__1CA7377D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaActivo] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Categoria__Sigla__1D9B5BB6]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaActivo] ADD  DEFAULT ('') FOR [Sigla]
GO
/****** Object:  Default [DF__Categoria__Masca__1E8F7FEF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaActivo] ADD  DEFAULT ('') FOR [Mascara]
GO
/****** Object:  Default [DF__Categoria__Meses__1F83A428]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaActivo] ADD  DEFAULT ((0)) FOR [MesesVidaUtil]
GO
/****** Object:  Default [DF__Categoria__DiasV__2077C861]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaActivo] ADD  DEFAULT ((0)) FOR [DiasVidaUtil]
GO
/****** Object:  Default [DF__Categoria__Depre__216BEC9A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaActivo] ADD  DEFAULT ((-1)) FOR [Deprecia]
GO
/****** Object:  Default [DF__Categoria__Carac__226010D3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaActivo] ADD  DEFAULT ('') FOR [Caracteristicas]
GO
/****** Object:  Default [DF__Categoria__Codig__7B113988]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaArticulo] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Categoria__Padre__7C055DC1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaArticulo] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__Categoria__Nivel__7CF981FA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaArticulo] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__Categoria__Ramas__7DEDA633]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaArticulo] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__Categoria__Nombr__7EE1CA6C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaArticulo] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Categoria__Sigla__7FD5EEA5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaArticulo] ADD  DEFAULT ('') FOR [Sigla]
GO
/****** Object:  Default [DF__Categoria__Masca__00CA12DE]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaArticulo] ADD  DEFAULT ('') FOR [Mascara]
GO
/****** Object:  Default [DF__Categoria__Carac__01BE3717]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaArticulo] ADD  DEFAULT ('') FOR [Caracteristicas]
GO
/****** Object:  Default [DF__Categoria__Codig__7187CF4E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaProveedor] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Categoria__Padre__727BF387]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaProveedor] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__Categoria__Nivel__737017C0]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaProveedor] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__Categoria__Ramas__74643BF9]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaProveedor] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__Categoria__Nombr__75586032]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaProveedor] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Categoria__Sigla__764C846B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaProveedor] ADD  DEFAULT ('') FOR [Sigla]
GO
/****** Object:  Default [DF__Categoria__Masca__7740A8A4]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaProveedor] ADD  DEFAULT ('') FOR [Mascara]
GO
/****** Object:  Default [DF__Categoria__Descr__7834CCDD]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CategoriaProveedor] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__Config__Codigo__7F60ED59]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Config] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Config__Valor__00551192]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Config] ADD  DEFAULT ('') FOR [Valor]
GO
/****** Object:  Default [DF__Config__Descripc__014935CB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Config] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__Config__FechaMod__69B1A35C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Config] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__Contrato__Codigo__01342732]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Contrato] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Contrato__Refere__02284B6B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Contrato] ADD  DEFAULT ('') FOR [Referencia]
GO
/****** Object:  Default [DF__Contrato__Person__031C6FA4]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Contrato] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__Contrato__TipoCo__041093DD]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Contrato] ADD  DEFAULT ('') FOR [TipoCon]
GO
/****** Object:  Default [DF__Contrato__FechaF__0504B816]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Contrato] ADD  DEFAULT ('06/06/2079') FOR [FechaFirma]
GO
/****** Object:  Default [DF__Contrato__FechaI__05F8DC4F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Contrato] ADD  DEFAULT ('06/06/2079') FOR [FechaInicio]
GO
/****** Object:  Default [DF__Contrato__TDRs__06ED0088]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Contrato] ADD  DEFAULT ('') FOR [TDRs]
GO
/****** Object:  Default [DF__Contrato__Objeto__07E124C1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Contrato] ADD  DEFAULT ('') FOR [Objeto]
GO
/****** Object:  Default [DF__Contrato__Observ__08D548FA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Contrato] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__ContratoD__Contr__0BB1B5A5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[ContratoDet] ADD  DEFAULT ('') FOR [Contrato]
GO
/****** Object:  Default [DF__ContratoD__Fecha__0CA5D9DE]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[ContratoDet] ADD  DEFAULT ('06/06/2079') FOR [Fecha]
GO
/****** Object:  Default [DF__ContratoD__Monto__0D99FE17]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[ContratoDet] ADD  DEFAULT ((0.00)) FOR [Monto]
GO
/****** Object:  Default [DF__ContratoD__Moned__0E8E2250]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[ContratoDet] ADD  DEFAULT ('1') FOR [Moneda]
GO
/****** Object:  Default [DF__ContratoD__Obser__0F824689]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[ContratoDet] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__Costo__Codigo__7C3A67EB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Costo] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Costo__Padre__7D2E8C24]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Costo] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__Costo__Nivel__7E22B05D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Costo] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__Costo__Ramas__7F16D496]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Costo] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__Costo__Nombre__000AF8CF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Costo] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Costo__CodigoEDT__064DE20A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Costo] ADD  DEFAULT ('') FOR [CodigoEDT]
GO
/****** Object:  Default [DF__Costo__NombreAlt__07420643]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Costo] ADD  DEFAULT ('') FOR [NombreAlternativo]
GO
/****** Object:  Default [DF__Costo__Descripci__08362A7C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Costo] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__Costo__FechaModi__092A4EB5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Costo] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__Cuenta__Codigo__673F4B05]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cuenta] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Cuenta__Padre__68336F3E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cuenta] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__Cuenta__Nivel__69279377]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cuenta] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__Cuenta__Ramas__6A1BB7B0]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cuenta] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__Cuenta__Nombre__6B0FDBE9]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cuenta] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Cuenta__Saldo__6C040022]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cuenta] ADD  DEFAULT ((0)) FOR [Saldo]
GO
/****** Object:  Default [DF__Cuenta__ConAuxil__6CF8245B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cuenta] ADD  DEFAULT ((0)) FOR [ConAuxiliares]
GO
/****** Object:  Default [DF__Cuenta__NumeroCu__7ADC2F5E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cuenta] ADD  DEFAULT ('') FOR [NumeroCuenta]
GO
/****** Object:  Default [DF__Cuenta__CodigoED__7BD05397]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cuenta] ADD  DEFAULT ('') FOR [CodigoEDT]
GO
/****** Object:  Default [DF__Cuenta__NombreAl__7CC477D0]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cuenta] ADD  DEFAULT ('') FOR [NombreAlternativo]
GO
/****** Object:  Default [DF__Cuenta__Moneda__7DB89C09]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cuenta] ADD  DEFAULT ('1') FOR [Moneda]
GO
/****** Object:  Default [DF__Cuenta__Descripc__7EACC042]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cuenta] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__Cuenta__FechaMod__7FA0E47B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Cuenta] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__CuentaAux__Codig__6FD49106]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CuentaAuxiliar] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__CuentaAux__Padre__70C8B53F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CuentaAuxiliar] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__CuentaAux__Nivel__71BCD978]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CuentaAuxiliar] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__CuentaAux__Ramas__72B0FDB1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CuentaAuxiliar] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__CuentaAux__Nombr__73A521EA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CuentaAuxiliar] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__CuentaAux__Cuent__74994623]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CuentaAuxiliar] ADD  DEFAULT ('') FOR [Cuenta]
GO
/****** Object:  Default [DF__CuentaAux__Numer__009508B4]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CuentaAuxiliar] ADD  DEFAULT ('') FOR [NumeroCuenta]
GO
/****** Object:  Default [DF__CuentaAux__Codig__01892CED]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CuentaAuxiliar] ADD  DEFAULT ('') FOR [CodigoEDT]
GO
/****** Object:  Default [DF__CuentaAux__Nombr__027D5126]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CuentaAuxiliar] ADD  DEFAULT ('') FOR [NombreAlternativo]
GO
/****** Object:  Default [DF__CuentaAux__Moned__0371755F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CuentaAuxiliar] ADD  DEFAULT ('1') FOR [Moneda]
GO
/****** Object:  Default [DF__CuentaAux__Descr__04659998]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CuentaAuxiliar] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__CuentaAux__Fecha__0559BDD1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[CuentaAuxiliar] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__Documento__Codig__23893F36]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Documento] ADD  DEFAULT ('000000000000') FOR [Codigo]
GO
/****** Object:  Default [DF__Documento__Titul__247D636F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Documento] ADD  DEFAULT ('') FOR [Titulo]
GO
/****** Object:  Default [DF__Documento__Refer__257187A8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Documento] ADD  DEFAULT ('') FOR [Referencia]
GO
/****** Object:  Default [DF__Documento__Clave__2665ABE1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Documento] ADD  DEFAULT ('') FOR [Clave]
GO
/****** Object:  Default [DF__Documento__Autor__2759D01A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Documento] ADD  DEFAULT ('') FOR [Autor]
GO
/****** Object:  Default [DF__Documento__Exped__284DF453]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Documento] ADD  DEFAULT ('') FOR [Expediente]
GO
/****** Object:  Default [DF__Documento__Fecha__2942188C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Documento] ADD  DEFAULT ('06/06/2079') FOR [FechaCreacion]
GO
/****** Object:  Default [DF__Documento__Exten__2A363CC5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Documento] ADD  DEFAULT ('') FOR [Extension]
GO
/****** Object:  Default [DF__Documento__Tema__2B2A60FE]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Documento] ADD  DEFAULT ('') FOR [Tema]
GO
/****** Object:  Default [DF__Documento__Entid__3EFC4F81]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivo] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__Documento__Progr__3FF073BA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivo] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__Documento__TipoD__40E497F3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivo] ADD  DEFAULT ('') FOR [TipoDocumentoActivo]
GO
/****** Object:  Default [DF__Documento__Numer__41D8BC2C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivo] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__Documento__Fecha__42CCE065]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivo] ADD  DEFAULT ('06/06/2079') FOR [Fecha]
GO
/****** Object:  Default [DF__Documento__Moned__43C1049E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivo] ADD  DEFAULT ('1') FOR [Moneda]
GO
/****** Object:  Default [DF__Documento__Prove__44B528D7]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivo] ADD  DEFAULT ('') FOR [Proveedor]
GO
/****** Object:  Default [DF__Documento__Ubica__45A94D10]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivo] ADD  DEFAULT ('') FOR [Ubicacion]
GO
/****** Object:  Default [DF__Documento__Organ__469D7149]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivo] ADD  DEFAULT ('') FOR [Organizacion]
GO
/****** Object:  Default [DF__Documento__Perso__47919582]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivo] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__Documento__Conce__4885B9BB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivo] ADD  DEFAULT ('') FOR [Concepto]
GO
/****** Object:  Default [DF__Documento__Estad__4979DDF4]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivo] ADD  DEFAULT ((1)) FOR [Estado]
GO
/****** Object:  Default [DF__Documento__TipoD__4A6E022D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivo] ADD  DEFAULT ('') FOR [TipoDocumentoFinanciero]
GO
/****** Object:  Default [DF__Documento__Numer__4B622666]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivo] ADD  DEFAULT ((0)) FOR [NumeroDocumentoFinanciero]
GO
/****** Object:  Default [DF__Documento__Entid__4E3E9311]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivoCambio] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__Documento__Progr__4F32B74A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivoCambio] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__Documento__TipoD__5026DB83]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivoCambio] ADD  DEFAULT ('') FOR [TipoDocumentoActivo]
GO
/****** Object:  Default [DF__Documento__Numer__511AFFBC]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivoCambio] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__Documento__Moned__520F23F5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivoCambio] ADD  DEFAULT ('') FOR [Moneda]
GO
/****** Object:  Default [DF__Documento__TipoC__5303482E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivoCambio] ADD  DEFAULT ((1)) FOR [TipoCambio]
GO
/****** Object:  Default [DF__Documento__Entid__55DFB4D9]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivoDetalle] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__Documento__Progr__56D3D912]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivoDetalle] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__Documento__TipoD__57C7FD4B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivoDetalle] ADD  DEFAULT ('') FOR [TipoDocumentoActivo]
GO
/****** Object:  Default [DF__Documento__Numer__58BC2184]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivoDetalle] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__Documento__Activ__59B045BD]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivoDetalle] ADD  DEFAULT ('') FOR [Activo]
GO
/****** Object:  Default [DF__Documento__Meses__5AA469F6]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivoDetalle] ADD  DEFAULT ((0)) FOR [MesesVidaUtil]
GO
/****** Object:  Default [DF__Documento__DiasV__5B988E2F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivoDetalle] ADD  DEFAULT ((0)) FOR [DiasVidaUtil]
GO
/****** Object:  Default [DF__Documento__Meses__5C8CB268]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivoDetalle] ADD  DEFAULT ((0)) FOR [MesesDepreciado]
GO
/****** Object:  Default [DF__Documento__DiasD__5D80D6A1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivoDetalle] ADD  DEFAULT ((0)) FOR [DiasDepreciado]
GO
/****** Object:  Default [DF__Documento__Valor__5E74FADA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivoDetalle] ADD  DEFAULT ((0.00)) FOR [Valor]
GO
/****** Object:  Default [DF__Documento__Depre__5F691F13]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivoDetalle] ADD  DEFAULT ((0.00)) FOR [Depreciacion]
GO
/****** Object:  Default [DF__Documento__Obser__605D434C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoActivoDetalle] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__Documento__Entid__29CC2871]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticulo] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__Documento__Progr__2AC04CAA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticulo] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__Documento__Almac__2BB470E3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticulo] ADD  DEFAULT ('') FOR [AlmacenArticulo]
GO
/****** Object:  Default [DF__Documento__TipoD__2CA8951C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticulo] ADD  DEFAULT ('') FOR [TipoDocumentoArticulo]
GO
/****** Object:  Default [DF__Documento__Numer__2D9CB955]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticulo] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__Documento__Fecha__2E90DD8E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticulo] ADD  DEFAULT ('06/06/2079') FOR [Fecha]
GO
/****** Object:  Default [DF__Documento__Moned__2F8501C7]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticulo] ADD  DEFAULT ('1') FOR [Moneda]
GO
/****** Object:  Default [DF__Documento__Prove__30792600]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticulo] ADD  DEFAULT ('') FOR [Proveedor]
GO
/****** Object:  Default [DF__Documento__Organ__316D4A39]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticulo] ADD  DEFAULT ('') FOR [Organizacion]
GO
/****** Object:  Default [DF__Documento__Perso__32616E72]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticulo] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__Documento__Costo__335592AB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticulo] ADD  DEFAULT ('') FOR [Costo]
GO
/****** Object:  Default [DF__Documento__SubCo__3449B6E4]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticulo] ADD  DEFAULT ('') FOR [SubCosto]
GO
/****** Object:  Default [DF__Documento__Cuent__353DDB1D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticulo] ADD  DEFAULT ('') FOR [CuentaCosto]
GO
/****** Object:  Default [DF__Documento__Conce__3631FF56]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticulo] ADD  DEFAULT ('') FOR [Concepto]
GO
/****** Object:  Default [DF__Documento__Estad__3726238F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticulo] ADD  DEFAULT ((1)) FOR [Estado]
GO
/****** Object:  Default [DF__Documento__Usuar__381A47C8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticulo] ADD  DEFAULT ('') FOR [Usuario]
GO
/****** Object:  Default [DF__Documento__TipoD__390E6C01]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticulo] ADD  DEFAULT ('') FOR [TipoDocumentoFinanciero]
GO
/****** Object:  Default [DF__Documento__Numer__3A02903A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticulo] ADD  DEFAULT ((0)) FOR [NumeroDocumentoFinanciero]
GO
/****** Object:  Default [DF__Documento__Entid__3CDEFCE5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloCambio] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__Documento__Progr__3DD3211E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloCambio] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__Documento__Almac__3EC74557]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloCambio] ADD  DEFAULT ('') FOR [AlmacenArticulo]
GO
/****** Object:  Default [DF__Documento__TipoD__3FBB6990]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloCambio] ADD  DEFAULT ('') FOR [TipoDocumentoArticulo]
GO
/****** Object:  Default [DF__Documento__Numer__40AF8DC9]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloCambio] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__Documento__Moned__41A3B202]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloCambio] ADD  DEFAULT ('') FOR [Moneda]
GO
/****** Object:  Default [DF__Documento__TipoC__4297D63B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloCambio] ADD  DEFAULT ((1)) FOR [TipoCambio]
GO
/****** Object:  Default [DF__Documento__Entid__457442E6]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloDetalle] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__Documento__Progr__4668671F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloDetalle] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__Documento__Almac__475C8B58]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloDetalle] ADD  DEFAULT ('') FOR [AlmacenArticulo]
GO
/****** Object:  Default [DF__Documento__TipoD__4850AF91]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloDetalle] ADD  DEFAULT ('') FOR [TipoDocumentoArticulo]
GO
/****** Object:  Default [DF__Documento__Numer__4944D3CA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloDetalle] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__DocumentoA__Fila__4A38F803]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloDetalle] ADD  DEFAULT ((9999)) FOR [Fila]
GO
/****** Object:  Default [DF__Documento__Artic__4B2D1C3C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloDetalle] ADD  DEFAULT ('') FOR [Articulo]
GO
/****** Object:  Default [DF__DocumentoA__Lote__4C214075]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloDetalle] ADD  DEFAULT ('') FOR [Lote]
GO
/****** Object:  Default [DF__Documento__Canti__4D1564AE]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloDetalle] ADD  DEFAULT ((0)) FOR [CantidadPedida]
GO
/****** Object:  Default [DF__Documento__Canti__4E0988E7]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloDetalle] ADD  DEFAULT ((1)) FOR [Cantidad]
GO
/****** Object:  Default [DF__Documento__Costo__4EFDAD20]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloDetalle] ADD  DEFAULT ((0.00)) FOR [CostoUnitario]
GO
/****** Object:  Default [DF__Documento__Costo__4FF1D159]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloDetalle] ADD  DEFAULT ((0.00)) FOR [CostoTotal]
GO
/****** Object:  Default [DF__Documento__Obser__50E5F592]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloDetalle] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__Documento__Venci__66361833]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoArticuloDetalle] ADD  DEFAULT ('01/01/1900') FOR [Vencimiento]
GO
/****** Object:  Default [DF__Documento__Entid__286DEFE4]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacion] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__Documento__Progr__2962141D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacion] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__Documento__TipoD__2A563856]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacion] ADD  DEFAULT ('') FOR [TipoDocumentoConciliacion]
GO
/****** Object:  Default [DF__Documento__Numer__2B4A5C8F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacion] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__Documento__Fecha__2C3E80C8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacion] ADD  DEFAULT ('06/06/2079') FOR [FechaInicial]
GO
/****** Object:  Default [DF__Documento__Fecha__2D32A501]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacion] ADD  DEFAULT ('06/06/2079') FOR [FechaFinal]
GO
/****** Object:  Default [DF__Documento__Cuent__2E26C93A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacion] ADD  DEFAULT ('') FOR [Cuenta]
GO
/****** Object:  Default [DF__Documento__Cuent__2F1AED73]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacion] ADD  DEFAULT ('') FOR [CuentaAuxiliar]
GO
/****** Object:  Default [DF__Documento__Moned__300F11AC]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacion] ADD  DEFAULT ('1') FOR [Moneda]
GO
/****** Object:  Default [DF__Documento__Saldo__310335E5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacion] ADD  DEFAULT ((0.00)) FOR [SaldoBanco]
GO
/****** Object:  Default [DF__Documento__Conce__31F75A1E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacion] ADD  DEFAULT ('') FOR [Concepto]
GO
/****** Object:  Default [DF__Documento__Estad__32EB7E57]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacion] ADD  DEFAULT ((1)) FOR [Estado]
GO
/****** Object:  Default [DF__Documento__Fecha__33DFA290]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacion] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__Documento__Entid__36BC0F3B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacionDetalle] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__Documento__Progr__37B03374]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacionDetalle] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__Documento__TipoD__38A457AD]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacionDetalle] ADD  DEFAULT ('') FOR [TipoDocumentoConciliacion]
GO
/****** Object:  Default [DF__Documento__Numer__39987BE6]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacionDetalle] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__DocumentoC__Fila__3A8CA01F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacionDetalle] ADD  DEFAULT ((999999)) FOR [Fila]
GO
/****** Object:  Default [DF__Documento__Orige__3B80C458]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacionDetalle] ADD  DEFAULT ((1)) FOR [Origen]
GO
/****** Object:  Default [DF__Documento__Causa__3C74E891]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacionDetalle] ADD  DEFAULT ((1)) FOR [Causa]
GO
/****** Object:  Default [DF__Documento__Fecha__3D690CCA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacionDetalle] ADD  DEFAULT ('01/01/1900') FOR [Fecha]
GO
/****** Object:  Default [DF__Documento__Monto__3E5D3103]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacionDetalle] ADD  DEFAULT ((0.00)) FOR [Monto]
GO
/****** Object:  Default [DF__Documento__Numer__3F51553C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacionDetalle] ADD  DEFAULT ('') FOR [NumeroCheque]
GO
/****** Object:  Default [DF__Documento__Benef__40457975]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacionDetalle] ADD  DEFAULT ('') FOR [Beneficiario]
GO
/****** Object:  Default [DF__Documento__Conce__41399DAE]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoConciliacionDetalle] ADD  DEFAULT ('') FOR [Concepto]
GO
/****** Object:  Default [DF__Documento__Entid__4AF81212]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinanciero] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__Documento__Progr__4BEC364B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinanciero] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__Documento__TipoD__4CE05A84]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinanciero] ADD  DEFAULT ('') FOR [TipoDocumentoFinanciero]
GO
/****** Object:  Default [DF__Documento__Numer__4DD47EBD]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinanciero] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__Documento__Fecha__4EC8A2F6]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinanciero] ADD  DEFAULT ('06/06/2079') FOR [Fecha]
GO
/****** Object:  Default [DF__Documento__Moned__4FBCC72F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinanciero] ADD  DEFAULT ('1') FOR [Moneda]
GO
/****** Object:  Default [DF__Documento__Presu__50B0EB68]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinanciero] ADD  DEFAULT ((0)) FOR [Presupuestado]
GO
/****** Object:  Default [DF__Documento__Preve__51A50FA1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinanciero] ADD  DEFAULT ((0)) FOR [Prevenido]
GO
/****** Object:  Default [DF__Documento__Compr__529933DA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinanciero] ADD  DEFAULT ((0)) FOR [Comprometido]
GO
/****** Object:  Default [DF__Documento__Deven__538D5813]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinanciero] ADD  DEFAULT ((0)) FOR [Devengado]
GO
/****** Object:  Default [DF__Documento__Ejecu__54817C4C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinanciero] ADD  DEFAULT ((0)) FOR [Ejecutado]
GO
/****** Object:  Default [DF__Documento__Refer__5575A085]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinanciero] ADD  DEFAULT ('') FOR [Referencia]
GO
/****** Object:  Default [DF__Documento__Benef__5669C4BE]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinanciero] ADD  DEFAULT ('') FOR [Beneficiario]
GO
/****** Object:  Default [DF__Documento__Conce__575DE8F7]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinanciero] ADD  DEFAULT ('') FOR [Concepto]
GO
/****** Object:  Default [DF__Documento__Estad__58520D30]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinanciero] ADD  DEFAULT ((1)) FOR [Estado]
GO
/****** Object:  Default [DF__Documento__Modul__59463169]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinanciero] ADD  DEFAULT ((0)) FOR [ModuloOrigen]
GO
/****** Object:  Default [DF__Documento__TipoD__5A3A55A2]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinanciero] ADD  DEFAULT ('') FOR [TipoDocumentoFinancieroOriginal]
GO
/****** Object:  Default [DF__Documento__Numer__5B2E79DB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinanciero] ADD  DEFAULT ((0)) FOR [NumeroOriginal]
GO
/****** Object:  Default [DF__Documento__Fecha__5C229E14]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinanciero] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__Documento__Entid__6576FE24]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__Documento__Progr__666B225D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__Documento__TipoD__675F4696]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ('') FOR [TipoDocumentoFinanciero]
GO
/****** Object:  Default [DF__Documento__Numer__68536ACF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__DocumentoF__Fila__69478F08]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ((999999)) FOR [Fila]
GO
/****** Object:  Default [DF__Documento__TipoB__6A3BB341]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ((1)) FOR [TipoBancarizacion]
GO
/****** Object:  Default [DF__Documento__Modal__6B2FD77A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ((1)) FOR [ModalidadTransaccion]
GO
/****** Object:  Default [DF__Documento__Fecha__6C23FBB3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ('06/06/2079') FOR [FechaFactura]
GO
/****** Object:  Default [DF__Documento__TipoT__6D181FEC]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ((1)) FOR [TipoTransaccion]
GO
/****** Object:  Default [DF__DocumentoFi__Nit__6E0C4425]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ('') FOR [Nit]
GO
/****** Object:  Default [DF__Documento__Razon__6F00685E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ('') FOR [RazonSocial]
GO
/****** Object:  Default [DF__Documento__Numer__6FF48C97]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ('') FOR [NumeroFactura]
GO
/****** Object:  Default [DF__Documento__Monto__70E8B0D0]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ((0.00)) FOR [MontoFactura]
GO
/****** Object:  Default [DF__Documento__Numer__71DCD509]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ((0)) FOR [NumeroAutorizacion]
GO
/****** Object:  Default [DF__Documento__Numer__72D0F942]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ('') FOR [NumeroCuenta]
GO
/****** Object:  Default [DF__Documento__Monto__73C51D7B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ((0.00)) FOR [MontoDocumento]
GO
/****** Object:  Default [DF__Documento__Monto__74B941B4]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ((0.00)) FOR [MontoAcumulado]
GO
/****** Object:  Default [DF__Documento__NitEn__75AD65ED]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ((0)) FOR [NitEntidadFinanciera]
GO
/****** Object:  Default [DF__Documento__Numer__76A18A26]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ('') FOR [NumeroDocumento]
GO
/****** Object:  Default [DF__Documento__TipoD__7795AE5F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ((1)) FOR [TipoDocumento]
GO
/****** Object:  Default [DF__Documento__Fecha__7889D298]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroBancarizacion] ADD  DEFAULT ('06/06/2079') FOR [FechaDocumento]
GO
/****** Object:  Default [DF__Documento__Entid__75235608]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroCambio] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__Documento__Progr__76177A41]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroCambio] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__Documento__TipoD__770B9E7A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroCambio] ADD  DEFAULT ('') FOR [TipoDocumentoFinanciero]
GO
/****** Object:  Default [DF__Documento__Numer__77FFC2B3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroCambio] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__Documento__Moned__78F3E6EC]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroCambio] ADD  DEFAULT ('') FOR [Moneda]
GO
/****** Object:  Default [DF__Documento__TipoC__79E80B25]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroCambio] ADD  DEFAULT ((1)) FOR [TipoCambio]
GO
/****** Object:  Default [DF__Documento__Entid__5EFF0ABF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroContabilidad] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__Documento__Progr__5FF32EF8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroContabilidad] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__Documento__TipoD__60E75331]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroContabilidad] ADD  DEFAULT ('') FOR [TipoDocumentoFinanciero]
GO
/****** Object:  Default [DF__Documento__Numer__61DB776A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroContabilidad] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__DocumentoF__Fila__62CF9BA3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroContabilidad] ADD  DEFAULT ((0)) FOR [Fila]
GO
/****** Object:  Default [DF__Documento__Costo__63C3BFDC]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroContabilidad] ADD  DEFAULT ('') FOR [Costo]
GO
/****** Object:  Default [DF__Documento__SubCo__64B7E415]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroContabilidad] ADD  DEFAULT ('') FOR [SubCosto]
GO
/****** Object:  Default [DF__Documento__Cuent__65AC084E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroContabilidad] ADD  DEFAULT ('') FOR [Cuenta]
GO
/****** Object:  Default [DF__Documento__Cuent__66A02C87]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroContabilidad] ADD  DEFAULT ('') FOR [CuentaAuxiliar]
GO
/****** Object:  Default [DF__Documento__Monto__679450C0]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroContabilidad] ADD  DEFAULT ((0)) FOR [Monto1]
GO
/****** Object:  Default [DF__Documento__Monto__688874F9]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroContabilidad] ADD  DEFAULT ((0)) FOR [Monto2]
GO
/****** Object:  Default [DF__Documento__Monto__697C9932]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroContabilidad] ADD  DEFAULT ((0)) FOR [Monto3]
GO
/****** Object:  Default [DF__Documento__Monto__6A70BD6B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroContabilidad] ADD  DEFAULT ((0)) FOR [Monto4]
GO
/****** Object:  Default [DF__Documento__Monto__6B64E1A4]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroContabilidad] ADD  DEFAULT ((0)) FOR [Monto9]
GO
/****** Object:  Default [DF__Documento__Conce__6C5905DD]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroContabilidad] ADD  DEFAULT ('') FOR [Concepto]
GO
/****** Object:  Default [DF__Documento__Numer__6D4D2A16]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroContabilidad] ADD  DEFAULT ('') FOR [NumeroCheque]
GO
/****** Object:  Default [DF__Documento__Benef__6E414E4F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroContabilidad] ADD  DEFAULT ('') FOR [Beneficiario]
GO
/****** Object:  Default [DF__Documento__Numer__6F357288]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroContabilidad] ADD  DEFAULT ('') FOR [NumeroDocumento]
GO
/****** Object:  Default [DF__Documento__Fecha__702996C1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroContabilidad] ADD  DEFAULT ('01/01/1900') FOR [FechaInicial]
GO
/****** Object:  Default [DF__Documento__Fecha__711DBAFA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroContabilidad] ADD  DEFAULT ('01/01/1900') FOR [FechaFinal]
GO
/****** Object:  Default [DF__Documento__Entid__5540965B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroGasto] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__Documento__Progr__5634BA94]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroGasto] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__Documento__TipoD__5728DECD]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroGasto] ADD  DEFAULT ('') FOR [TipoDocumentoFinanciero]
GO
/****** Object:  Default [DF__Documento__Numer__581D0306]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroGasto] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__DocumentoF__Fila__5911273F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroGasto] ADD  DEFAULT ((999999)) FOR [Fila]
GO
/****** Object:  Default [DF__Documento__TipoG__5A054B78]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroGasto] ADD  DEFAULT ('') FOR [TipoGasto]
GO
/****** Object:  Default [DF__Documento__Fecha__5AF96FB1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroGasto] ADD  DEFAULT ('06/06/2079') FOR [FechaGasto]
GO
/****** Object:  Default [DF__Documento__Forma__5BED93EA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroGasto] ADD  DEFAULT ((0)) FOR [FormaPago]
GO
/****** Object:  Default [DF__Documento__Nombr__5CE1B823]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroGasto] ADD  DEFAULT ('') FOR [NombreProveedor]
GO
/****** Object:  Default [DF__Documento__Numer__5DD5DC5C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroGasto] ADD  DEFAULT ('') FOR [NumeroRecibo]
GO
/****** Object:  Default [DF__Documento__Entid__7B663F43]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroIva] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__Documento__Progr__7C5A637C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroIva] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__Documento__TipoD__7D4E87B5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroIva] ADD  DEFAULT ('') FOR [TipoDocumentoFinanciero]
GO
/****** Object:  Default [DF__Documento__Numer__7E42ABEE]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroIva] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__DocumentoF__Fila__7F36D027]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroIva] ADD  DEFAULT ((999999)) FOR [Fila]
GO
/****** Object:  Default [DF__Documento__TipoL__002AF460]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroIva] ADD  DEFAULT ((1)) FOR [TipoLibro]
GO
/****** Object:  Default [DF__Documento__TipoF__011F1899]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroIva] ADD  DEFAULT ((1)) FOR [TipoFactura]
GO
/****** Object:  Default [DF__DocumentoFi__Nit__02133CD2]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroIva] ADD  DEFAULT ('0') FOR [Nit]
GO
/****** Object:  Default [DF__Documento__Razon__0307610B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroIva] ADD  DEFAULT ('') FOR [RazonSocial]
GO
/****** Object:  Default [DF__Documento__Fecha__03FB8544]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroIva] ADD  DEFAULT ('06/06/2079') FOR [FechaFactura]
GO
/****** Object:  Default [DF__Documento__Numer__04EFA97D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroIva] ADD  DEFAULT ((0)) FOR [NumeroFactura]
GO
/****** Object:  Default [DF__Documento__Numer__05E3CDB6]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroIva] ADD  DEFAULT ('') FOR [NumeroPoliza]
GO
/****** Object:  Default [DF__Documento__Impor__06D7F1EF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroIva] ADD  DEFAULT ((0.00)) FOR [ImporteFactura]
GO
/****** Object:  Default [DF__Documento__Impor__07CC1628]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroIva] ADD  DEFAULT ((0.00)) FOR [ImporteExento]
GO
/****** Object:  Default [DF__Documento__Impor__08C03A61]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroIva] ADD  DEFAULT ((0.00)) FOR [ImporteIce]
GO
/****** Object:  Default [DF__Documento__Impor__09B45E9A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroIva] ADD  DEFAULT ((0.00)) FOR [ImporteImpuesto]
GO
/****** Object:  Default [DF__Documento__Numer__0AA882D3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroIva] ADD  DEFAULT ((0)) FOR [NumeroAutorizacion]
GO
/****** Object:  Default [DF__Documento__Codig__0B9CA70C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroIva] ADD  DEFAULT ('') FOR [CodigoControl]
GO
/****** Object:  Default [DF__Documento__Estad__0C90CB45]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroIva] ADD  DEFAULT ((1)) FOR [EstadoFactura]
GO
/****** Object:  Default [DF__Documento__Entid__73FA27A5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroPresupuesto] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__Documento__Progr__74EE4BDE]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroPresupuesto] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__Documento__TipoD__75E27017]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroPresupuesto] ADD  DEFAULT ('') FOR [TipoDocumentoFinanciero]
GO
/****** Object:  Default [DF__Documento__Numer__76D69450]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroPresupuesto] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__DocumentoF__Fila__77CAB889]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroPresupuesto] ADD  DEFAULT ((0)) FOR [Fila]
GO
/****** Object:  Default [DF__Documento__Recur__78BEDCC2]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroPresupuesto] ADD  DEFAULT ('') FOR [Recurso]
GO
/****** Object:  Default [DF__DocumentoFi__Poa__79B300FB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroPresupuesto] ADD  DEFAULT ('') FOR [Poa]
GO
/****** Object:  Default [DF__Documento__Gasto__7AA72534]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroPresupuesto] ADD  DEFAULT ('') FOR [Gasto]
GO
/****** Object:  Default [DF__Documento__Varia__7B9B496D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroPresupuesto] ADD  DEFAULT ('') FOR [VariablePresupuesto1]
GO
/****** Object:  Default [DF__Documento__Varia__7C8F6DA6]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroPresupuesto] ADD  DEFAULT ('') FOR [VariablePresupuesto2]
GO
/****** Object:  Default [DF__Documento__Varia__7D8391DF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroPresupuesto] ADD  DEFAULT ('') FOR [VariablePresupuesto3]
GO
/****** Object:  Default [DF__Documento__Varia__7E77B618]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroPresupuesto] ADD  DEFAULT ('') FOR [VariablePresupuesto4]
GO
/****** Object:  Default [DF__Documento__Varia__7F6BDA51]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroPresupuesto] ADD  DEFAULT ('') FOR [VariablePresupuesto5]
GO
/****** Object:  Default [DF__Documento__Monto__005FFE8A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroPresupuesto] ADD  DEFAULT ((0)) FOR [Monto1]
GO
/****** Object:  Default [DF__Documento__Monto__015422C3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroPresupuesto] ADD  DEFAULT ((0)) FOR [Monto2]
GO
/****** Object:  Default [DF__Documento__Monto__024846FC]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroPresupuesto] ADD  DEFAULT ((0)) FOR [Monto3]
GO
/****** Object:  Default [DF__Documento__Monto__033C6B35]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroPresupuesto] ADD  DEFAULT ((0)) FOR [Monto4]
GO
/****** Object:  Default [DF__Documento__Monto__04308F6E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroPresupuesto] ADD  DEFAULT ((0)) FOR [Monto9]
GO
/****** Object:  Default [DF__Documento__Conce__0524B3A7]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroPresupuesto] ADD  DEFAULT ('') FOR [Concepto]
GO
/****** Object:  Default [DF__Documento__Entid__4C764630]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroTesoreria] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__Documento__Progr__4D6A6A69]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroTesoreria] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__Documento__TipoD__4E5E8EA2]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroTesoreria] ADD  DEFAULT ('') FOR [TipoDocumentoFinanciero]
GO
/****** Object:  Default [DF__Documento__Numer__4F52B2DB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroTesoreria] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__DocumentoF__Fila__5046D714]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroTesoreria] ADD  DEFAULT ((0)) FOR [Fila]
GO
/****** Object:  Default [DF__Documento__Cuent__513AFB4D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroTesoreria] ADD  DEFAULT ('') FOR [Cuenta]
GO
/****** Object:  Default [DF__Documento__Cuent__522F1F86]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroTesoreria] ADD  DEFAULT ('') FOR [CuentaAuxiliar]
GO
/****** Object:  Default [DF__Documento__Monto__532343BF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroTesoreria] ADD  DEFAULT ((0.00)) FOR [Monto1]
GO
/****** Object:  Default [DF__Documento__Monto__541767F8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroTesoreria] ADD  DEFAULT ((0.00)) FOR [Monto2]
GO
/****** Object:  Default [DF__Documento__Monto__550B8C31]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroTesoreria] ADD  DEFAULT ((0.00)) FOR [Monto3]
GO
/****** Object:  Default [DF__Documento__Monto__55FFB06A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroTesoreria] ADD  DEFAULT ((0.00)) FOR [Monto4]
GO
/****** Object:  Default [DF__Documento__Monto__56F3D4A3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroTesoreria] ADD  DEFAULT ((0.00)) FOR [Monto9]
GO
/****** Object:  Default [DF__Documento__Conce__57E7F8DC]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroTesoreria] ADD  DEFAULT ('') FOR [Concepto]
GO
/****** Object:  Default [DF__Documento__Numer__58DC1D15]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroTesoreria] ADD  DEFAULT ('') FOR [NumeroCheque]
GO
/****** Object:  Default [DF__Documento__Benef__59D0414E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroTesoreria] ADD  DEFAULT ('') FOR [Beneficiario]
GO
/****** Object:  Default [DF__Documento__Numer__5AC46587]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[DocumentoFinancieroTesoreria] ADD  DEFAULT ('') FOR [NumeroDocumento]
GO
/****** Object:  Default [DF__Entidad__Codigo__0425A276]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Entidad] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Entidad__Padre__0519C6AF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Entidad] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__Entidad__Nivel__060DEAE8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Entidad] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__Entidad__Ramas__07020F21]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Entidad] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__Entidad__Nombre__07F6335A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Entidad] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Entidad__Sigla__08EA5793]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Entidad] ADD  DEFAULT ('') FOR [Sigla]
GO
/****** Object:  Default [DF__Entidad__CodigoE__63F8CA06]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Entidad] ADD  DEFAULT ('') FOR [CodigoEDT]
GO
/****** Object:  Default [DF__Entidad__NombreA__64ECEE3F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Entidad] ADD  DEFAULT ('') FOR [NombreAlternativo]
GO
/****** Object:  Default [DF__Entidad__FechaMo__65E11278]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Entidad] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__Gasto__Codigo__08012052]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Gasto] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Gasto__Padre__08F5448B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Gasto] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__Gasto__Nivel__09E968C4]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Gasto] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__Gasto__Ramas__0ADD8CFD]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Gasto] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__Gasto__Nombre__0BD1B136]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Gasto] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Gasto__CodigoEDT__0CC5D56F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Gasto] ADD  DEFAULT ('') FOR [CodigoEDT]
GO
/****** Object:  Default [DF__Gasto__NombreAlt__0DB9F9A8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Gasto] ADD  DEFAULT ('') FOR [NombreAlternativo]
GO
/****** Object:  Default [DF__Gasto__Descripci__0EAE1DE1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Gasto] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__Gasto__FechaModi__0FA2421A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Gasto] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__Horario__Codigo__7E37BEF6]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Horario] ADD  DEFAULT ('"H"00') FOR [Codigo]
GO
/****** Object:  Default [DF__Horario__Nombre__7F2BE32F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Horario] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Horario__PesoAsi__00200768]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Horario] ADD  DEFAULT ((1)) FOR [PesoAsistencia]
GO
/****** Object:  Default [DF__Horario__PesoAus__01142BA1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Horario] ADD  DEFAULT ((0.00)) FOR [PesoAusencia]
GO
/****** Object:  Default [DF__Horario__PesoExt__02084FDA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Horario] ADD  DEFAULT ((0.00)) FOR [PesoExtra]
GO
/****** Object:  Default [DF__Horario__MargenM__02FC7413]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Horario] ADD  DEFAULT ((30)) FOR [MargenMarcado]
GO
/****** Object:  Default [DF__Horario__SoloHor__03F0984C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Horario] ADD  DEFAULT ((0)) FOR [SoloHorasPico]
GO
/****** Object:  Default [DF__Horario__Descrip__04E4BC85]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Horario] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__HorarioDe__Horar__70FDBF69]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[HorarioDet] ADD  DEFAULT ('') FOR [Horario]
GO
/****** Object:  Default [DF__HorarioDet__Dia__71F1E3A2]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[HorarioDet] ADD  DEFAULT ((1)) FOR [Dia]
GO
/****** Object:  Default [DF__HorarioDe__Turno__72E607DB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[HorarioDet] ADD  DEFAULT ('') FOR [Turno]
GO
/****** Object:  Default [DF__HorarioDe__HoraE__73DA2C14]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[HorarioDet] ADD  DEFAULT ('06/06/2079') FOR [HoraEntrada]
GO
/****** Object:  Default [DF__HorarioDe__Toler__74CE504D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[HorarioDet] ADD  DEFAULT ((10)) FOR [ToleranciaEntrada]
GO
/****** Object:  Default [DF__HorarioDe__HoraS__75C27486]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[HorarioDet] ADD  DEFAULT ('06/06/2079') FOR [HoraSalida]
GO
/****** Object:  Default [DF__HorarioDe__Toler__76B698BF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[HorarioDet] ADD  DEFAULT ((0)) FOR [ToleranciaSalida]
GO
/****** Object:  Default [DF__Ingreso__Entidad__361203C5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Ingreso] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__Ingreso__Program__370627FE]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Ingreso] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__Ingreso__TipoPla__37FA4C37]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Ingreso] ADD  DEFAULT ('') FOR [TipoPlanilla]
GO
/****** Object:  Default [DF__Ingreso__TipoID__38EE7070]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Ingreso] ADD  DEFAULT ('') FOR [TipoID]
GO
/****** Object:  Default [DF__Ingreso__Numero__39E294A9]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Ingreso] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__Ingreso__Periodo__3AD6B8E2]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Ingreso] ADD  DEFAULT ('06/06/2079') FOR [Periodo]
GO
/****** Object:  Default [DF__Ingreso__Fecha__3BCADD1B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Ingreso] ADD  DEFAULT ('06/06/2079') FOR [Fecha]
GO
/****** Object:  Default [DF__Ingreso__Moneda__3CBF0154]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Ingreso] ADD  DEFAULT ('1') FOR [Moneda]
GO
/****** Object:  Default [DF__Ingreso__Referen__3DB3258D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Ingreso] ADD  DEFAULT ('') FOR [Referencia]
GO
/****** Object:  Default [DF__Ingreso__Glosa__3EA749C6]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Ingreso] ADD  DEFAULT ('') FOR [Glosa]
GO
/****** Object:  Default [DF__Ingreso__Estado__3F9B6DFF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Ingreso] ADD  DEFAULT ((1)) FOR [Estado]
GO
/****** Object:  Default [DF__IngresoCa__Entid__4277DAAA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoCambio] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__IngresoCa__Progr__436BFEE3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoCambio] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__IngresoCa__TipoP__4460231C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoCambio] ADD  DEFAULT ('') FOR [TipoPlanilla]
GO
/****** Object:  Default [DF__IngresoCa__TipoI__45544755]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoCambio] ADD  DEFAULT ('') FOR [TipoID]
GO
/****** Object:  Default [DF__IngresoCa__Numer__46486B8E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoCambio] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__IngresoCa__Moned__473C8FC7]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoCambio] ADD  DEFAULT ('') FOR [Moneda]
GO
/****** Object:  Default [DF__IngresoCa__TipoC__4830B400]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoCambio] ADD  DEFAULT ((1)) FOR [TipoCambio]
GO
/****** Object:  Default [DF__IngresoDe__Entid__4B0D20AB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__IngresoDe__Progr__4C0144E4]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__IngresoDe__TipoP__4CF5691D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ('') FOR [TipoPlanilla]
GO
/****** Object:  Default [DF__IngresoDe__TipoI__4DE98D56]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ('') FOR [TipoID]
GO
/****** Object:  Default [DF__IngresoDe__Numer__4EDDB18F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__IngresoDe__Perso__4FD1D5C8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__IngresoDe__Puest__50C5FA01]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ('') FOR [Puesto]
GO
/****** Object:  Default [DF__IngresoDe__Fecha__51BA1E3A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ('01/01/1900') FOR [Fecha]
GO
/****** Object:  Default [DF__IngresoDe__Valor__52AE4273]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ((0.00)) FOR [Valor01]
GO
/****** Object:  Default [DF__IngresoDe__Valor__53A266AC]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ((0.00)) FOR [Valor02]
GO
/****** Object:  Default [DF__IngresoDe__Valor__54968AE5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ((0.00)) FOR [Valor03]
GO
/****** Object:  Default [DF__IngresoDe__Valor__558AAF1E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ((0.00)) FOR [Valor04]
GO
/****** Object:  Default [DF__IngresoDe__Valor__567ED357]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ((0.00)) FOR [Valor05]
GO
/****** Object:  Default [DF__IngresoDe__Meses__5772F790]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ((0.00)) FOR [Meses]
GO
/****** Object:  Default [DF__IngresoDet__Dias__58671BC9]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ((0.00)) FOR [Dias]
GO
/****** Object:  Default [DF__IngresoDe__Canti__595B4002]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ((1)) FOR [Cantidad]
GO
/****** Object:  Default [DF__IngresoDe__Monto__5A4F643B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ((0.00)) FOR [Monto]
GO
/****** Object:  Default [DF__IngresoDe__Descu__5B438874]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ((0.00)) FOR [Descuento]
GO
/****** Object:  Default [DF__IngresoDe__Total__5C37ACAD]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ((0.00)) FOR [Total]
GO
/****** Object:  Default [DF__IngresoDe__Lugar__5D2BD0E6]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ('') FOR [Lugar]
GO
/****** Object:  Default [DF__IngresoDe__Numer__5E1FF51F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ('') FOR [NumeroCheque]
GO
/****** Object:  Default [DF__IngresoDe__Finan__5F141958]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ('') FOR [Financiera]
GO
/****** Object:  Default [DF__IngresoDe__Numer__60083D91]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ('') FOR [NumeroCuenta]
GO
/****** Object:  Default [DF__IngresoDe__Obser__60FC61CA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[IngresoDetalle] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__Lugar__Codigo__44FF419A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Lugar] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Lugar__Padre__45F365D3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Lugar] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__Lugar__Nivel__46E78A0C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Lugar] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__Lugar__Ramas__47DBAE45]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Lugar] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__Lugar__Nombre__48CFD27E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Lugar] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Lugar__Sigla__49C3F6B7]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Lugar] ADD  DEFAULT ('') FOR [Sigla]
GO
/****** Object:  Default [DF__Lugar__NumeroPat__4AB81AF0]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Lugar] ADD  DEFAULT ('') FOR [NumeroPatronal]
GO
/****** Object:  Default [DF__Moneda__Codigo__72C60C4A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Moneda] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Moneda__Nombre__73BA3083]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Moneda] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Moneda__Sigla__74AE54BC]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Moneda] ADD  DEFAULT ('') FOR [Sigla]
GO
/****** Object:  Default [DF__Moneda__FechaMod__6AA5C795]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Moneda] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__MonedaCam__Moned__4D94879B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[MonedaCam] ADD  DEFAULT ('') FOR [Moneda]
GO
/****** Object:  Default [DF__MonedaCam__Fecha__4E88ABD4]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[MonedaCam] ADD  DEFAULT ('06/06/2079') FOR [Fecha]
GO
/****** Object:  Default [DF__MonedaCam__TipoC__4F7CD00D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[MonedaCam] ADD  DEFAULT ((1)) FOR [TipoCambio]
GO
/****** Object:  Default [DF__Organizac__Codig__30F848ED]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Organizacion] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Organizac__Padre__31EC6D26]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Organizacion] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__Organizac__Nivel__32E0915F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Organizacion] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__Organizac__Ramas__33D4B598]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Organizacion] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__Organizac__Nombr__34C8D9D1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Organizacion] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Organizac__Sigla__35BCFE0A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Organizacion] ADD  DEFAULT ('') FOR [Sigla]
GO
/****** Object:  Default [DF__Organizac__Forma__36B12243]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Organizacion] ADD  DEFAULT ((3)) FOR [FormaOrganigrama]
GO
/****** Object:  Default [DF__Organizac__Aline__37A5467C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Organizacion] ADD  DEFAULT ((1)) FOR [AlineacionSubordinados]
GO
/****** Object:  Default [DF__Organizac__Costo__38996AB5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Organizacion] ADD  DEFAULT ('') FOR [Costo]
GO
/****** Object:  Default [DF__Organizac__SubCo__398D8EEE]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Organizacion] ADD  DEFAULT ('') FOR [SubCosto]
GO
/****** Object:  Default [DF__Organizac__Cuent__3A81B327]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Organizacion] ADD  DEFAULT ('') FOR [CuentaCosto]
GO
/****** Object:  Default [DF__Organizac__Cuent__3B75D760]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Organizacion] ADD  DEFAULT ('') FOR [CuentaAuxiliarCosto]
GO
/****** Object:  Default [DF__Parametro__Codig__571DF1D5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Parametro] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Parametro__Nombr__5812160E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Parametro] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Parametro__Param__52593CB8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[ParametroVal] ADD  DEFAULT ('') FOR [Parametro]
GO
/****** Object:  Default [DF__Parametro__Fecha__534D60F1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[ParametroVal] ADD  DEFAULT ('06/06/2079') FOR [Fecha]
GO
/****** Object:  Default [DF__Parametro__Valor__5441852A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[ParametroVal] ADD  DEFAULT ((0.00)) FOR [Valor]
GO
/****** Object:  Default [DF__PerfilEva__Codig__11158940]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PerfilEvaluacion] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__PerfilEva__Nombr__1209AD79]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PerfilEvaluacion] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__PerfilEva__TipoP__12FDD1B2]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PerfilEvaluacion] ADD  DEFAULT ('') FOR [TipoPerfilEva]
GO
/****** Object:  Default [DF__PerfilEva__Sigla__13F1F5EB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PerfilEvaluacion] ADD  DEFAULT ('') FOR [Sigla]
GO
/****** Object:  Default [DF__PerfilEva__Descr__14E61A24]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PerfilEvaluacion] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__PerfilEva__Perfi__17C286CF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PerfilEvaluacionDet] ADD  DEFAULT ('') FOR [PerfilEvaluacion]
GO
/****** Object:  Default [DF__PerfilEva__Sigla__18B6AB08]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PerfilEvaluacionDet] ADD  DEFAULT ('') FOR [Sigla]
GO
/****** Object:  Default [DF__PerfilEva__Nombr__19AACF41]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PerfilEvaluacionDet] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__PerfilEva__Punta__1A9EF37A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PerfilEvaluacionDet] ADD  DEFAULT ((0.00)) FOR [Puntaje]
GO
/****** Object:  Default [DF__PerfilEva__Descr__1B9317B3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PerfilEvaluacionDet] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__Permiso__Codigo__1CBC4616]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Permiso] ADD  DEFAULT ('000000') FOR [Codigo]
GO
/****** Object:  Default [DF__Permiso__Persona__1DB06A4F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Permiso] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__Permiso__Estado__1EA48E88]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Permiso] ADD  DEFAULT ((2)) FOR [Estado]
GO
/****** Object:  Default [DF__Permiso__FechaSo__1F98B2C1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Permiso] ADD  DEFAULT ('06/06/2079') FOR [FechaSolicitud]
GO
/****** Object:  Default [DF__Permiso__TipoPer__208CD6FA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Permiso] ADD  DEFAULT ('') FOR [TipoPermiso]
GO
/****** Object:  Default [DF__Permiso__FechaSa__2180FB33]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Permiso] ADD  DEFAULT ('06/06/2079') FOR [FechaSalida]
GO
/****** Object:  Default [DF__Permiso__FechaRe__22751F6C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Permiso] ADD  DEFAULT ('06/06/2079') FOR [FechaRetorno]
GO
/****** Object:  Default [DF__Permiso__HoraSal__236943A5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Permiso] ADD  DEFAULT ('01/01/1900') FOR [HoraSalida]
GO
/****** Object:  Default [DF__Permiso__HoraRet__245D67DE]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Permiso] ADD  DEFAULT ('01/01/1900') FOR [HoraRetorno]
GO
/****** Object:  Default [DF__Permiso__Tipo__25518C17]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Permiso] ADD  DEFAULT ((1)) FOR [Tipo]
GO
/****** Object:  Default [DF__Permiso__Observa__2645B050]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Permiso] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__PermisoDe__Permi__02E7657A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PermisoDetalle] ADD  DEFAULT ('') FOR [Permiso]
GO
/****** Object:  Default [DF__PermisoDe__Fecha__03DB89B3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PermisoDetalle] ADD  DEFAULT ('06/06/2079') FOR [Fecha]
GO
/****** Object:  Default [DF__PermisoDe__HoraS__04CFADEC]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PermisoDetalle] ADD  DEFAULT ('01/01/1900') FOR [HoraSalida]
GO
/****** Object:  Default [DF__PermisoDe__HoraR__05C3D225]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PermisoDetalle] ADD  DEFAULT ('01/01/1900') FOR [HoraRetorno]
GO
/****** Object:  Default [DF__PermisoDet__Dias__06B7F65E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PermisoDetalle] ADD  DEFAULT ((0.00)) FOR [Dias]
GO
/****** Object:  Default [DF__PermisoDe__Obser__07AC1A97]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PermisoDetalle] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__Persona__Codigo__27F8EE98]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Persona__TipoDoc__28ED12D1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('CI') FOR [TipoDocumento]
GO
/****** Object:  Default [DF__Persona__NumeroD__29E1370A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [NumeroDocumento]
GO
/****** Object:  Default [DF__Persona__LugarEx__2AD55B43]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [LugarExpedicion]
GO
/****** Object:  Default [DF__Persona__Apellid__2BC97F7C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [ApellidoPaterno]
GO
/****** Object:  Default [DF__Persona__Apellid__2CBDA3B5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [ApellidoMaterno]
GO
/****** Object:  Default [DF__Persona__Apellid__2DB1C7EE]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [ApellidoCasada]
GO
/****** Object:  Default [DF__Persona__Nombres__2EA5EC27]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [Nombres]
GO
/****** Object:  Default [DF__Persona__Genero__2F9A1060]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('M') FOR [Genero]
GO
/****** Object:  Default [DF__Persona__FechaNa__308E3499]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('01/01/1900') FOR [FechaNacimiento]
GO
/****** Object:  Default [DF__Persona__PaisNac__318258D2]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('Bolivia') FOR [PaisNacimiento]
GO
/****** Object:  Default [DF__Persona__Departa__32767D0B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [DepartamentoNacimiento]
GO
/****** Object:  Default [DF__Persona__CiudadN__336AA144]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [CiudadNacimiento]
GO
/****** Object:  Default [DF__Persona__Naciona__345EC57D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('Boliviana') FOR [Nacionalidad]
GO
/****** Object:  Default [DF__Persona__EstadoC__3552E9B6]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('SOL') FOR [EstadoCivil]
GO
/****** Object:  Default [DF__Persona__AFP__36470DEF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ((2)) FOR [AFP]
GO
/****** Object:  Default [DF__Persona__NUA__373B3228]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [NUA]
GO
/****** Object:  Default [DF__Persona__REN__382F5661]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [REN]
GO
/****** Object:  Default [DF__Persona__TipoAfi__39237A9A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ((1)) FOR [TipoAfiliado]
GO
/****** Object:  Default [DF__Persona__CajaSal__3A179ED3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('CNS') FOR [CajaSalud]
GO
/****** Object:  Default [DF__Persona__NumeroS__3B0BC30C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [NumeroSeguro]
GO
/****** Object:  Default [DF__Persona__TipoSeg__3BFFE745]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ((1)) FOR [TipoSeguro]
GO
/****** Object:  Default [DF__Persona__Financi__3CF40B7E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('SEF') FOR [Financiera]
GO
/****** Object:  Default [DF__Persona__TipoCue__3DE82FB7]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ((1)) FOR [TipoCuenta]
GO
/****** Object:  Default [DF__Persona__NumeroC__3EDC53F0]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [NumeroCuenta]
GO
/****** Object:  Default [DF__Persona__Domicil__3FD07829]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [DomicilioDireccion]
GO
/****** Object:  Default [DF__Persona__Domicil__40C49C62]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [DomicilioEdificio]
GO
/****** Object:  Default [DF__Persona__Domicil__41B8C09B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [DomicilioZona]
GO
/****** Object:  Default [DF__Persona__LugarRe__42ACE4D4]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [LugarResidencia]
GO
/****** Object:  Default [DF__Persona__Telefon__43A1090D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [Telefono]
GO
/****** Object:  Default [DF__Persona__Celular__44952D46]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [Celular]
GO
/****** Object:  Default [DF__Persona__Email__4589517F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [Email]
GO
/****** Object:  Default [DF__Persona__EmailTr__467D75B8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [EmailTrabajo]
GO
/****** Object:  Default [DF__Persona__Profesi__477199F1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [Profesion]
GO
/****** Object:  Default [DF__Persona__Colegio__4865BE2A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [ColegioProfesionales]
GO
/****** Object:  Default [DF__Persona__Registr__4959E263]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [RegistroProfesional]
GO
/****** Object:  Default [DF__Persona__NIT__4A4E069C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [NIT]
GO
/****** Object:  Default [DF__Persona__Estatur__4B422AD5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ((0.00)) FOR [Estatura]
GO
/****** Object:  Default [DF__Persona__Peso__4C364F0E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ((0.00)) FOR [Peso]
GO
/****** Object:  Default [DF__Persona__GrupoSa__4D2A7347]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [GrupoSanguineo]
GO
/****** Object:  Default [DF__Persona__Incompa__4E1E9780]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [Incompatibilidad]
GO
/****** Object:  Default [DF__Persona__Estado__4F12BBB9]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('A') FOR [Estado]
GO
/****** Object:  Default [DF__Persona__CuentaA__5006DFF2]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [CuentaAuxiliar]
GO
/****** Object:  Default [DF__Persona__Observa__50FB042B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__Persona__FechaMo__51EF2864]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('06/06/2079') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__Persona__Usuario__52E34C9D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Persona] ADD  DEFAULT ('-') FOR [Usuario]
GO
/****** Object:  Default [DF__PersonaAc__Perso__55BFB948]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaAca] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__PersonaAc__Numer__56B3DD81]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaAca] ADD  DEFAULT ('000') FOR [Numero]
GO
/****** Object:  Default [DF__PersonaAc__Lugar__57A801BA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaAca] ADD  DEFAULT ('') FOR [Lugar]
GO
/****** Object:  Default [DF__PersonaAc__Entid__589C25F3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaAca] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__PersonaAc__Carre__59904A2C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaAca] ADD  DEFAULT ('') FOR [Carrera]
GO
/****** Object:  Default [DF__PersonaAc__Asign__5A846E65]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaAca] ADD  DEFAULT ('') FOR [Asignatura]
GO
/****** Object:  Default [DF__PersonaAc__Fecha__5B78929E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaAca] ADD  DEFAULT ('06/06/2079') FOR [FechaIni]
GO
/****** Object:  Default [DF__PersonaAc__Fecha__5C6CB6D7]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaAca] ADD  DEFAULT ('06/06/2079') FOR [FechaFin]
GO
/****** Object:  Default [DF__PersonaAc__Obser__5D60DB10]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaAca] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__PersonaCa__Perso__603D47BB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCap] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__PersonaCa__Numer__61316BF4]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCap] ADD  DEFAULT ('000') FOR [Numero]
GO
/****** Object:  Default [DF__PersonaCa__TipoC__6225902D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCap] ADD  DEFAULT ((1)) FOR [TipoCap]
GO
/****** Object:  Default [DF__PersonaCa__Descr__6319B466]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCap] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__PersonaCa__Lugar__640DD89F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCap] ADD  DEFAULT (' ') FOR [Lugar]
GO
/****** Object:  Default [DF__PersonaCa__Entid__6501FCD8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCap] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__PersonaCa__Fecha__65F62111]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCap] ADD  DEFAULT ('06/06/2079') FOR [FechaIni]
GO
/****** Object:  Default [DF__PersonaCa__Fecha__66EA454A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCap] ADD  DEFAULT ('06/06/2079') FOR [FechaFin]
GO
/****** Object:  Default [DF__PersonaCa__Carga__67DE6983]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCap] ADD  DEFAULT ((0.00)) FOR [CargaHoraria]
GO
/****** Object:  Default [DF__PersonaCa__Obser__68D28DBC]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCap] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__PersonaCa__Perso__7993056A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCar] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__PersonaCa__Fecha__7A8729A3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCar] ADD  DEFAULT ('06/06/2079') FOR [Fecha]
GO
/****** Object:  Default [DF__PersonaCa__TipoE__7B7B4DDC]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCar] ADD  DEFAULT ((1)) FOR [TipoEscalafon]
GO
/****** Object:  Default [DF__PersonaCa__Rango__7C6F7215]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCar] ADD  DEFAULT ('') FOR [Rango]
GO
/****** Object:  Default [DF__PersonaCar__RM__7D63964E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCar] ADD  DEFAULT ('') FOR [RM]
GO
/****** Object:  Default [DF__PersonaCa__Obser__7E57BA87]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCar] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__PersonaCa__Perso__6BAEFA67]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCas] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__PersonaCa__Numer__6CA31EA0]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCas] ADD  DEFAULT ('000') FOR [Numero]
GO
/****** Object:  Default [DF__PersonaCa__Fecha__6D9742D9]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCas] ADD  DEFAULT ('06/06/2079') FOR [FechaIni]
GO
/****** Object:  Default [DF__PersonaCa__Fecha__6E8B6712]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCas] ADD  DEFAULT ('06/06/2079') FOR [FechaFin]
GO
/****** Object:  Default [DF__PersonaCa__Meses__6F7F8B4B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCas] ADD  DEFAULT ((0)) FOR [Meses]
GO
/****** Object:  Default [DF__PersonaCas__Dias__7073AF84]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCas] ADD  DEFAULT ((0)) FOR [Dias]
GO
/****** Object:  Default [DF__PersonaCa__Descr__7167D3BD]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCas] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__PersonaCo__Perso__74444068]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCon] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__PersonaCo__Numer__753864A1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCon] ADD  DEFAULT ('000') FOR [Numero]
GO
/****** Object:  Default [DF__PersonaCo__Descr__762C88DA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCon] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__PersonaCo__Nivel__7720AD13]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCon] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__PersonaCo__Obser__7814D14C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaCon] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__PersonaDo__Perso__162F4418]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaDoc] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__PersonaDo__Numer__17236851]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaDoc] ADD  DEFAULT ('000') FOR [Numero]
GO
/****** Object:  Default [DF__PersonaDo__Fecha__18178C8A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaDoc] ADD  DEFAULT ('06/06/2079') FOR [Fecha]
GO
/****** Object:  Default [DF__PersonaDo__TipoD__190BB0C3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaDoc] ADD  DEFAULT ('') FOR [TipoDoc]
GO
/****** Object:  Default [DF__PersonaDo__Remit__19FFD4FC]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaDoc] ADD  DEFAULT ('') FOR [Remitente]
GO
/****** Object:  Default [DF__PersonaDo__Desti__1AF3F935]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaDoc] ADD  DEFAULT ('') FOR [Destinatario]
GO
/****** Object:  Default [DF__PersonaDo__Obser__1BE81D6E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaDoc] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__PersonaDo__Docum__1CDC41A7]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaDoc] ADD  DEFAULT ('') FOR [Documento]
GO
/****** Object:  Default [DF__PersonaEx__Perso__7AF13DF7]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaExp] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__PersonaEx__Numer__7BE56230]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaExp] ADD  DEFAULT ('000') FOR [Numero]
GO
/****** Object:  Default [DF__PersonaEx__Entid__7CD98669]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaExp] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__PersonaEx__Cargo__7DCDAAA2]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaExp] ADD  DEFAULT ('') FOR [CargoFuncion]
GO
/****** Object:  Default [DF__PersonaEx__Secto__7EC1CEDB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaExp] ADD  DEFAULT ('') FOR [Sector]
GO
/****** Object:  Default [DF__PersonaEx__Lugar__7FB5F314]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaExp] ADD  DEFAULT ('') FOR [Lugar]
GO
/****** Object:  Default [DF__PersonaEx__Fecha__00AA174D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaExp] ADD  DEFAULT ('01/01/1900') FOR [FechaIni]
GO
/****** Object:  Default [DF__PersonaEx__Fecha__019E3B86]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaExp] ADD  DEFAULT ('01/01/1900') FOR [FechaFin]
GO
/****** Object:  Default [DF__PersonaEx__Obser__02925FBF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaExp] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__PersonaFa__Perso__4B973090]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFamilia] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__PersonaFa__Numer__4C8B54C9]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFamilia] ADD  DEFAULT ('00') FOR [Numero]
GO
/****** Object:  Default [DF__PersonaFa__TipoF__4D7F7902]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFamilia] ADD  DEFAULT ((1)) FOR [TipoFamilia]
GO
/****** Object:  Default [DF__PersonaFa__Apell__4E739D3B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFamilia] ADD  DEFAULT ('') FOR [ApellidoPaterno]
GO
/****** Object:  Default [DF__PersonaFa__Apell__4F67C174]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFamilia] ADD  DEFAULT ('') FOR [ApellidoMaterno]
GO
/****** Object:  Default [DF__PersonaFa__Nombr__505BE5AD]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFamilia] ADD  DEFAULT ('') FOR [Nombres]
GO
/****** Object:  Default [DF__PersonaFa__Gener__515009E6]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFamilia] ADD  DEFAULT ('M') FOR [Genero]
GO
/****** Object:  Default [DF__PersonaFa__Fecha__52442E1F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFamilia] ADD  DEFAULT ('01/01/1900') FOR [FechaNacimiento]
GO
/****** Object:  Default [DF__PersonaFa__Lugar__53385258]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFamilia] ADD  DEFAULT ('') FOR [LugarNacimiento]
GO
/****** Object:  Default [DF__PersonaFa__Docum__542C7691]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFamilia] ADD  DEFAULT ('') FOR [DocumentoIdentidad]
GO
/****** Object:  Default [DF__PersonaFa__Domic__55209ACA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFamilia] ADD  DEFAULT ('') FOR [DomicilioDireccion]
GO
/****** Object:  Default [DF__PersonaFa__Telef__5614BF03]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFamilia] ADD  DEFAULT ('') FOR [Telefono]
GO
/****** Object:  Default [DF__PersonaFa__Obser__5708E33C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFamilia] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__PersonaFo__Perso__056ECC6A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFor] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__PersonaFo__Numer__0662F0A3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFor] ADD  DEFAULT ('000') FOR [Numero]
GO
/****** Object:  Default [DF__PersonaFo__Nivel__075714DC]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFor] ADD  DEFAULT ((99)) FOR [NivelFormacion]
GO
/****** Object:  Default [DF__PersonaFo__Titul__084B3915]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFor] ADD  DEFAULT ('') FOR [Titulo]
GO
/****** Object:  Default [DF__PersonaFo__Espec__093F5D4E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFor] ADD  DEFAULT ('') FOR [Especialidad]
GO
/****** Object:  Default [DF__PersonaFo__Entid__0A338187]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFor] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__PersonaFo__Lugar__0B27A5C0]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFor] ADD  DEFAULT ('') FOR [Lugar]
GO
/****** Object:  Default [DF__PersonaFo__Fecha__0C1BC9F9]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFor] ADD  DEFAULT ('01/01/1900') FOR [FechaIni]
GO
/****** Object:  Default [DF__PersonaFo__Fecha__0D0FEE32]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFor] ADD  DEFAULT ('01/01/1900') FOR [FechaFin]
GO
/****** Object:  Default [DF__PersonaFo__Fecha__0E04126B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFor] ADD  DEFAULT ('01/01/1900') FOR [FechaExtension]
GO
/****** Object:  Default [DF__PersonaFo__Carga__0EF836A4]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFor] ADD  DEFAULT ((0.00)) FOR [CargaHoraria]
GO
/****** Object:  Default [DF__PersonaFo__Obser__0FEC5ADD]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFor] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__PersonaFo__Perso__12C8C788]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaFot] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__PersonaHo__Perso__4AD81681]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaHor] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__PersonaHo__Fecha__4BCC3ABA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaHor] ADD  DEFAULT ('06/06/2079') FOR [Fecha]
GO
/****** Object:  Default [DF__PersonaHo__Horar__4CC05EF3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaHor] ADD  DEFAULT ('') FOR [Horario]
GO
/****** Object:  Default [DF__PersonaHo__TipoM__4DB4832C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaHor] ADD  DEFAULT ((1)) FOR [TipoMarcado]
GO
/****** Object:  Default [DF__PersonaHo__Obser__4EA8A765]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaHor] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__PersonaHo__Fecha__4F9CCB9E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaHor] ADD  DEFAULT ('06/06/2079') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__PersonaHu__Perso__15A53433]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaHue] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__PersonaHue__Dedo__1699586C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaHue] ADD  DEFAULT ('DI') FOR [Dedo]
GO
/****** Object:  Default [DF__PersonaHu__Fecha__178D7CA5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaHue] ADD  DEFAULT ('06/06/2079') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__PersonaId__Perso__1A69E950]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaIdi] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__PersonaId__Numer__1B5E0D89]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaIdi] ADD  DEFAULT ('000') FOR [Numero]
GO
/****** Object:  Default [DF__PersonaId__Descr__1C5231C2]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaIdi] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__PersonaId__Habla__1D4655FB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaIdi] ADD  DEFAULT ((1)) FOR [Habla]
GO
/****** Object:  Default [DF__PersonaId__Escri__1E3A7A34]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaIdi] ADD  DEFAULT ((1)) FOR [Escribe]
GO
/****** Object:  Default [DF__PersonaIdi__Lee__1F2E9E6D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaIdi] ADD  DEFAULT ((1)) FOR [Lee]
GO
/****** Object:  Default [DF__PersonaId__Titul__2022C2A6]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaIdi] ADD  DEFAULT ((-1)) FOR [Titulo]
GO
/****** Object:  Default [DF__PersonaId__Fecha__2116E6DF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaIdi] ADD  DEFAULT ('01/01/1900') FOR [FechaExtension]
GO
/****** Object:  Default [DF__PersonaId__Obser__220B0B18]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaIdi] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__PersonaIn__Perso__39AD8A7F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaIni] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__PersonaIn__Numer__3AA1AEB8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaIni] ADD  DEFAULT ('000') FOR [Numero]
GO
/****** Object:  Default [DF__PersonaIn__Descr__3B95D2F1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaIni] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__PersonaIn__Recon__3C89F72A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaIni] ADD  DEFAULT ('') FOR [Reconocimiento]
GO
/****** Object:  Default [DF__PersonaIn__Fecha__3D7E1B63]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaIni] ADD  DEFAULT ('06/06/2079') FOR [FechaIni]
GO
/****** Object:  Default [DF__PersonaIn__Fecha__3E723F9C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaIni] ADD  DEFAULT ('06/06/2079') FOR [FechaFin]
GO
/****** Object:  Default [DF__PersonaIn__Entid__3F6663D5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaIni] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__PersonaIn__Lugar__405A880E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaIni] ADD  DEFAULT ('') FOR [Lugar]
GO
/****** Object:  Default [DF__PersonaIn__Obser__414EAC47]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaIni] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__PersonaMo__Perso__24E777C3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaMovimiento] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__PersonaMo__Fecha__25DB9BFC]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaMovimiento] ADD  DEFAULT ('06/06/2079') FOR [Fecha]
GO
/****** Object:  Default [DF__PersonaMo__Entid__26CFC035]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaMovimiento] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__PersonaMo__Progr__27C3E46E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaMovimiento] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__PersonaMo__TipoP__28B808A7]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaMovimiento] ADD  DEFAULT ('') FOR [TipoPlanilla]
GO
/****** Object:  Default [DF__PersonaMo__Puest__29AC2CE0]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaMovimiento] ADD  DEFAULT ('') FOR [Puesto]
GO
/****** Object:  Default [DF__PersonaMo__Fecha__2AA05119]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaMovimiento] ADD  DEFAULT ('01/01/1900') FOR [FechaIngreso]
GO
/****** Object:  Default [DF__PersonaMo__Lugar__2B947552]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaMovimiento] ADD  DEFAULT ('') FOR [Lugar]
GO
/****** Object:  Default [DF__PersonaMo__Modal__2C88998B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaMovimiento] ADD  DEFAULT ((1)) FOR [Modalidad]
GO
/****** Object:  Default [DF__PersonaMo__Refer__2D7CBDC4]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaMovimiento] ADD  DEFAULT ('') FOR [Referencia]
GO
/****** Object:  Default [DF__PersonaMo__TipoS__2E70E1FD]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaMovimiento] ADD  DEFAULT ((1)) FOR [TipoSueldo]
GO
/****** Object:  Default [DF__PersonaMo__Moned__2F650636]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaMovimiento] ADD  DEFAULT ('1') FOR [Moneda]
GO
/****** Object:  Default [DF__PersonaMo__Monto__30592A6F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaMovimiento] ADD  DEFAULT ((0.00)) FOR [Monto]
GO
/****** Object:  Default [DF__PersonaMo__Horas__314D4EA8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaMovimiento] ADD  DEFAULT ((8)) FOR [Horas]
GO
/****** Object:  Default [DF__PersonaMov__Cese__324172E1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaMovimiento] ADD  DEFAULT ('01/01/1900') FOR [Cese]
GO
/****** Object:  Default [DF__PersonaMo__Obser__3335971A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaMovimiento] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__PersonaPa__Perso__442B18F2]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaPar] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__PersonaPa__Param__451F3D2B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaPar] ADD  DEFAULT ('') FOR [Parametro]
GO
/****** Object:  Default [DF__PersonaPa__Fecha__46136164]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaPar] ADD  DEFAULT ('06/06/2079') FOR [Fecha]
GO
/****** Object:  Default [DF__PersonaPa__Valor__4707859D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaPar] ADD  DEFAULT ((0.00)) FOR [Valor]
GO
/****** Object:  Default [DF__PersonaPa__Obser__47FBA9D6]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PersonaPar] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__Planilla__Entida__63D8CE75]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Planilla] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__Planilla__Progra__64CCF2AE]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Planilla] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__Planilla__TipoPl__65C116E7]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Planilla] ADD  DEFAULT ('') FOR [TipoPlanilla]
GO
/****** Object:  Default [DF__Planilla__Numero__66B53B20]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Planilla] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__Planilla__Period__67A95F59]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Planilla] ADD  DEFAULT ('06/06/2079') FOR [Periodo]
GO
/****** Object:  Default [DF__Planilla__Fecha__689D8392]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Planilla] ADD  DEFAULT ('06/06/2079') FOR [Fecha]
GO
/****** Object:  Default [DF__Planilla__Moneda__6991A7CB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Planilla] ADD  DEFAULT ('1') FOR [Moneda]
GO
/****** Object:  Default [DF__Planilla__Refere__6A85CC04]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Planilla] ADD  DEFAULT ('') FOR [Referencia]
GO
/****** Object:  Default [DF__Planilla__Glosa__6B79F03D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Planilla] ADD  DEFAULT ('') FOR [Glosa]
GO
/****** Object:  Default [DF__Planilla__Estado__6C6E1476]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Planilla] ADD  DEFAULT ((1)) FOR [Estado]
GO
/****** Object:  Default [DF__Planilla__TipoDo__6D6238AF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Planilla] ADD  DEFAULT ('') FOR [TipoDocumentoFinanciero]
GO
/****** Object:  Default [DF__Planilla__Numero__6E565CE8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Planilla] ADD  DEFAULT ((0)) FOR [NumeroDocumentoFinanciero]
GO
/****** Object:  Default [DF__PlanillaC__Entid__7132C993]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaCambio] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__PlanillaC__Progr__7226EDCC]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaCambio] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__PlanillaC__TipoP__731B1205]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaCambio] ADD  DEFAULT ('') FOR [TipoPlanilla]
GO
/****** Object:  Default [DF__PlanillaC__Numer__740F363E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaCambio] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__PlanillaC__Moned__75035A77]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaCambio] ADD  DEFAULT ('1') FOR [Moneda]
GO
/****** Object:  Default [DF__PlanillaC__TipoC__75F77EB0]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaCambio] ADD  DEFAULT ((1)) FOR [TipoCambio]
GO
/****** Object:  Default [DF__PlanillaD__Entid__78D3EB5B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__PlanillaD__Progr__79C80F94]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__PlanillaD__TipoP__7ABC33CD]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ('') FOR [TipoPlanilla]
GO
/****** Object:  Default [DF__PlanillaD__Numer__7BB05806]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__PlanillaD__Perso__7CA47C3F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__PlanillaD__Puest__7D98A078]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ('') FOR [Puesto]
GO
/****** Object:  Default [DF__PlanillaD__Sueld__7E8CC4B1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [SueldoBasico]
GO
/****** Object:  Default [DF__PlanillaD__DiasT__7F80E8EA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [DiasTrabajados]
GO
/****** Object:  Default [DF__PlanillaD__Decla__00750D23]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [DeclaracionImpuestos]
GO
/****** Object:  Default [DF__PlanillaD__Saldo__0169315C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [SaldoImpuestos]
GO
/****** Object:  Default [DF__PlanillaD__Aport__025D5595]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Aporte01]
GO
/****** Object:  Default [DF__PlanillaD__Aport__035179CE]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Aporte02]
GO
/****** Object:  Default [DF__PlanillaD__Aport__04459E07]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Aporte03]
GO
/****** Object:  Default [DF__PlanillaD__Aport__0539C240]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Aporte04]
GO
/****** Object:  Default [DF__PlanillaD__Aport__062DE679]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Aporte05]
GO
/****** Object:  Default [DF__PlanillaD__Aport__07220AB2]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Aporte06]
GO
/****** Object:  Default [DF__PlanillaD__Aport__08162EEB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Aporte07]
GO
/****** Object:  Default [DF__PlanillaD__Aport__090A5324]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Aporte08]
GO
/****** Object:  Default [DF__PlanillaD__Aport__09FE775D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Aporte09]
GO
/****** Object:  Default [DF__PlanillaD__Aport__0AF29B96]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Aporte10]
GO
/****** Object:  Default [DF__PlanillaD__Valor__0BE6BFCF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Valor01]
GO
/****** Object:  Default [DF__PlanillaD__Valor__0CDAE408]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Valor02]
GO
/****** Object:  Default [DF__PlanillaD__Valor__0DCF0841]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Valor03]
GO
/****** Object:  Default [DF__PlanillaD__Valor__0EC32C7A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Valor04]
GO
/****** Object:  Default [DF__PlanillaD__Valor__0FB750B3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Valor05]
GO
/****** Object:  Default [DF__PlanillaD__Valor__10AB74EC]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Valor06]
GO
/****** Object:  Default [DF__PlanillaD__Valor__119F9925]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Valor07]
GO
/****** Object:  Default [DF__PlanillaD__Valor__1293BD5E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Valor08]
GO
/****** Object:  Default [DF__PlanillaD__Valor__1387E197]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Valor09]
GO
/****** Object:  Default [DF__PlanillaD__Valor__147C05D0]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Valor10]
GO
/****** Object:  Default [DF__PlanillaD__Ingre__15702A09]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Ingreso01]
GO
/****** Object:  Default [DF__PlanillaD__Ingre__16644E42]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Ingreso02]
GO
/****** Object:  Default [DF__PlanillaD__Ingre__1758727B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Ingreso03]
GO
/****** Object:  Default [DF__PlanillaD__Ingre__184C96B4]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Ingreso04]
GO
/****** Object:  Default [DF__PlanillaD__Ingre__1940BAED]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Ingreso05]
GO
/****** Object:  Default [DF__PlanillaD__Ingre__1A34DF26]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Ingreso06]
GO
/****** Object:  Default [DF__PlanillaD__Ingre__1B29035F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Ingreso07]
GO
/****** Object:  Default [DF__PlanillaD__Ingre__1C1D2798]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Ingreso08]
GO
/****** Object:  Default [DF__PlanillaD__Ingre__1D114BD1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Ingreso09]
GO
/****** Object:  Default [DF__PlanillaD__Ingre__1E05700A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Ingreso10]
GO
/****** Object:  Default [DF__PlanillaD__Descu__1EF99443]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Descuento01]
GO
/****** Object:  Default [DF__PlanillaD__Descu__1FEDB87C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Descuento02]
GO
/****** Object:  Default [DF__PlanillaD__Descu__20E1DCB5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Descuento03]
GO
/****** Object:  Default [DF__PlanillaD__Descu__21D600EE]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Descuento04]
GO
/****** Object:  Default [DF__PlanillaD__Descu__22CA2527]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Descuento05]
GO
/****** Object:  Default [DF__PlanillaD__Descu__23BE4960]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Descuento06]
GO
/****** Object:  Default [DF__PlanillaD__Descu__24B26D99]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Descuento07]
GO
/****** Object:  Default [DF__PlanillaD__Descu__25A691D2]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Descuento08]
GO
/****** Object:  Default [DF__PlanillaD__Descu__269AB60B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Descuento09]
GO
/****** Object:  Default [DF__PlanillaD__Descu__278EDA44]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((0.00)) FOR [Descuento10]
GO
/****** Object:  Default [DF__PlanillaD__Lugar__2882FE7D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ('') FOR [Lugar]
GO
/****** Object:  Default [DF__PlanillaDet__AFP__297722B6]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((1)) FOR [AFP]
GO
/****** Object:  Default [DF__PlanillaD__TipoA__2A6B46EF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ((1)) FOR [TipoAfiliado]
GO
/****** Object:  Default [DF__PlanillaD__CajaS__2B5F6B28]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ('') FOR [CajaSalud]
GO
/****** Object:  Default [DF__PlanillaD__Numer__2C538F61]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ('') FOR [NumeroCheque]
GO
/****** Object:  Default [DF__PlanillaD__Finan__2D47B39A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ('') FOR [Financiera]
GO
/****** Object:  Default [DF__PlanillaD__Numer__2E3BD7D3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ('') FOR [NumeroCuenta]
GO
/****** Object:  Default [DF__PlanillaD__Obser__2F2FFC0C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlanillaDetalle] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__Plantilla__Codig__127EAEC5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinanciero] ADD  DEFAULT ('000000') FOR [Codigo]
GO
/****** Object:  Default [DF__Plantilla__Nombr__1372D2FE]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinanciero] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Plantilla__Favor__1466F737]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinanciero] ADD  DEFAULT ((0)) FOR [Favorito]
GO
/****** Object:  Default [DF__Plantilla__Moned__155B1B70]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinanciero] ADD  DEFAULT ('1') FOR [Moneda]
GO
/****** Object:  Default [DF__Plantilla__Refer__164F3FA9]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinanciero] ADD  DEFAULT ('') FOR [Referencia]
GO
/****** Object:  Default [DF__Plantilla__Benef__174363E2]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinanciero] ADD  DEFAULT ('') FOR [Beneficiario]
GO
/****** Object:  Default [DF__Plantilla__Conce__1837881B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinanciero] ADD  DEFAULT ('') FOR [Concepto]
GO
/****** Object:  Default [DF__Plantilla__Fecha__192BAC54]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinanciero] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__Plantilla__Plant__1C0818FF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroContabilidad] ADD  DEFAULT ('') FOR [PlantillaDocumentoFinanciero]
GO
/****** Object:  Default [DF__PlantillaD__Fila__1CFC3D38]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroContabilidad] ADD  DEFAULT ((0)) FOR [Fila]
GO
/****** Object:  Default [DF__Plantilla__Costo__1DF06171]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroContabilidad] ADD  DEFAULT ('') FOR [Costo]
GO
/****** Object:  Default [DF__Plantilla__Cuent__1EE485AA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroContabilidad] ADD  DEFAULT ('') FOR [Cuenta]
GO
/****** Object:  Default [DF__Plantilla__Cuent__1FD8A9E3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroContabilidad] ADD  DEFAULT ('') FOR [CuentaAuxiliar]
GO
/****** Object:  Default [DF__Plantilla__Monto__20CCCE1C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroContabilidad] ADD  DEFAULT ((0.00)) FOR [Monto1]
GO
/****** Object:  Default [DF__Plantilla__Monto__21C0F255]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroContabilidad] ADD  DEFAULT ((0.00)) FOR [Monto2]
GO
/****** Object:  Default [DF__Plantilla__Monto__22B5168E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroContabilidad] ADD  DEFAULT ((0.00)) FOR [Monto3]
GO
/****** Object:  Default [DF__Plantilla__Monto__23A93AC7]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroContabilidad] ADD  DEFAULT ((0.00)) FOR [Monto4]
GO
/****** Object:  Default [DF__Plantilla__Monto__249D5F00]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroContabilidad] ADD  DEFAULT ((0.00)) FOR [Monto9]
GO
/****** Object:  Default [DF__Plantilla__Conce__25918339]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroContabilidad] ADD  DEFAULT ('') FOR [Concepto]
GO
/****** Object:  Default [DF__Plantilla__Plant__4BB72C21]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroDetalle] ADD  DEFAULT ('') FOR [PlantillaDocumentoFinanciero]
GO
/****** Object:  Default [DF__PlantillaD__Fila__4CAB505A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroDetalle] ADD  DEFAULT ((0)) FOR [Fila]
GO
/****** Object:  Default [DF__Plantilla__Colum__4D9F7493]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroDetalle] ADD  DEFAULT ('') FOR [Columna]
GO
/****** Object:  Default [DF__Plantilla__Formu__4E9398CC]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroDetalle] ADD  DEFAULT ('') FOR [Formula]
GO
/****** Object:  Default [DF__Plantilla__Plant__44160A59]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroParametro] ADD  DEFAULT ('') FOR [PlantillaDocumentoFinanciero]
GO
/****** Object:  Default [DF__Plantilla__Param__450A2E92]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroParametro] ADD  DEFAULT ('') FOR [Parametro]
GO
/****** Object:  Default [DF__Plantilla__TipoD__45FE52CB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroParametro] ADD  DEFAULT ((1)) FOR [TipoDato]
GO
/****** Object:  Default [DF__Plantilla__Valor__46F27704]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroParametro] ADD  DEFAULT ('') FOR [ValorDefecto]
GO
/****** Object:  Default [DF__Plantilla__Orden__47E69B3D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroParametro] ADD  DEFAULT ((0)) FOR [Orden]
GO
/****** Object:  Default [DF__Plantilla__Descr__48DABF76]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PlantillaDocumentoFinancieroParametro] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__Poa__Codigo__5DA0D232]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Poa] ADD  DEFAULT (' ') FOR [Codigo]
GO
/****** Object:  Default [DF__Poa__Padre__5E94F66B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Poa] ADD  DEFAULT (' ') FOR [Padre]
GO
/****** Object:  Default [DF__Poa__Nivel__5F891AA4]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Poa] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__Poa__Ramas__607D3EDD]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Poa] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__Poa__Nombre__61716316]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Poa] ADD  DEFAULT (' ') FOR [Nombre]
GO
/****** Object:  Default [DF__Poa__CodigoEDT__6265874F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Poa] ADD  DEFAULT (' ') FOR [CodigoEDT]
GO
/****** Object:  Default [DF__Poa__NombreAlter__6359AB88]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Poa] ADD  DEFAULT (' ') FOR [NombreAlternativo]
GO
/****** Object:  Default [DF__Poa__Descripcion__644DCFC1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Poa] ADD  DEFAULT (' ') FOR [Descripcion]
GO
/****** Object:  Default [DF__Poa__FechaModifi__6541F3FA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Poa] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__Prestamo__Entida__60C757A0]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Prestamo] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__Prestamo__Progra__61BB7BD9]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Prestamo] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__Prestamo__TipoPr__62AFA012]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Prestamo] ADD  DEFAULT ('') FOR [TipoPrestamo]
GO
/****** Object:  Default [DF__Prestamo__Numero__63A3C44B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Prestamo] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__Prestamo__Estado__6497E884]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Prestamo] ADD  DEFAULT ((1)) FOR [Estado]
GO
/****** Object:  Default [DF__Prestamo__Person__658C0CBD]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Prestamo] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__Prestamo__Fecha__668030F6]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Prestamo] ADD  DEFAULT ('01/01/1900') FOR [Fecha]
GO
/****** Object:  Default [DF__Prestamo__MontoP__6774552F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Prestamo] ADD  DEFAULT ((0)) FOR [MontoPrestamo]
GO
/****** Object:  Default [DF__Prestamo__Moneda__68687968]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Prestamo] ADD  DEFAULT ('1') FOR [Moneda]
GO
/****** Object:  Default [DF__Prestamo__Intere__695C9DA1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Prestamo] ADD  DEFAULT ((0)) FOR [InteresAnual]
GO
/****** Object:  Default [DF__Prestamo__Numero__6A50C1DA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Prestamo] ADD  DEFAULT ((0)) FOR [NumeroCuotas]
GO
/****** Object:  Default [DF__Prestamo__CuotaM__6B44E613]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Prestamo] ADD  DEFAULT ((0)) FOR [CuotaMensual]
GO
/****** Object:  Default [DF__Prestamo__Primer__6C390A4C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Prestamo] ADD  DEFAULT ('01/01/1900') FOR [PrimeraCuota]
GO
/****** Object:  Default [DF__Prestamo__Refere__6D2D2E85]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Prestamo] ADD  DEFAULT ('') FOR [Referencia]
GO
/****** Object:  Default [DF__Prestamo__Concep__6E2152BE]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Prestamo] ADD  DEFAULT ('') FOR [Concepto]
GO
/****** Object:  Default [DF__PrestamoC__Entid__59E54FE7]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PrestamoCambio] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__PrestamoC__Progr__5AD97420]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PrestamoCambio] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__PrestamoC__TipoP__5BCD9859]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PrestamoCambio] ADD  DEFAULT ('') FOR [TipoPrestamo]
GO
/****** Object:  Default [DF__PrestamoC__Numer__5CC1BC92]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PrestamoCambio] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__PrestamoC__Moned__5DB5E0CB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PrestamoCambio] ADD  DEFAULT ('1') FOR [Moneda]
GO
/****** Object:  Default [DF__PrestamoC__TipoC__5EAA0504]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PrestamoCambio] ADD  DEFAULT ((1)) FOR [TipoCambio]
GO
/****** Object:  Default [DF__PrestamoD__Entid__52793849]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PrestamoDetalle] ADD  DEFAULT ('') FOR [Entidad]
GO
/****** Object:  Default [DF__PrestamoD__Progr__536D5C82]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PrestamoDetalle] ADD  DEFAULT ('') FOR [Programa]
GO
/****** Object:  Default [DF__PrestamoD__TipoP__546180BB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PrestamoDetalle] ADD  DEFAULT ('') FOR [TipoPrestamo]
GO
/****** Object:  Default [DF__PrestamoD__Numer__5555A4F4]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PrestamoDetalle] ADD  DEFAULT ((0)) FOR [Numero]
GO
/****** Object:  Default [DF__PrestamoD__Fecha__5649C92D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PrestamoDetalle] ADD  DEFAULT ('01/01/1900') FOR [Fecha]
GO
/****** Object:  Default [DF__PrestamoD__Capit__573DED66]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PrestamoDetalle] ADD  DEFAULT ((0)) FOR [Capital]
GO
/****** Object:  Default [DF__PrestamoD__Inter__5832119F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PrestamoDetalle] ADD  DEFAULT ((0)) FOR [Interes]
GO
/****** Object:  Default [DF__PrestamoD__Amort__592635D8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PrestamoDetalle] ADD  DEFAULT ((0)) FOR [Amortizacion]
GO
/****** Object:  Default [DF__PrestamoD__Obser__5A1A5A11]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PrestamoDetalle] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__Programa__Codigo__25869641]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Programa] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Programa__Padre__267ABA7A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Programa] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__Programa__Nivel__276EDEB3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Programa] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__Programa__Ramas__286302EC]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Programa] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__Programa__Nombre__29572725]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Programa] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Programa__Sigla__2A4B4B5E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Programa] ADD  DEFAULT ('') FOR [Sigla]
GO
/****** Object:  Default [DF__Programa__Financ__2B3F6F97]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Programa] ADD  DEFAULT ('BCP') FOR [Financiera]
GO
/****** Object:  Default [DF__Programa__Numero__2C3393D0]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Programa] ADD  DEFAULT ('') FOR [NumeroCliente]
GO
/****** Object:  Default [DF__Programa__Numero__2D27B809]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Programa] ADD  DEFAULT ('') FOR [NumeroCuenta]
GO
/****** Object:  Default [DF__Programa__Extens__2E1BDC42]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Programa] ADD  DEFAULT ('') FOR [ExtensionArchivo]
GO
/****** Object:  Default [DF__Programa__Codigo__66D536B1]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Programa] ADD  DEFAULT ('') FOR [CodigoEDT]
GO
/****** Object:  Default [DF__Programa__Nombre__67C95AEA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Programa] ADD  DEFAULT ('') FOR [NombreAlternativo]
GO
/****** Object:  Default [DF__Programa__FechaM__68BD7F23]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Programa] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__Proveedor__Codig__6339AFF7]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Proveedor] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Proveedor__Categ__642DD430]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Proveedor] ADD  DEFAULT ('01') FOR [CategoriaProveedor]
GO
/****** Object:  Default [DF__Proveedor__Nombr__6521F869]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Proveedor] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Proveedor__Perso__66161CA2]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Proveedor] ADD  DEFAULT ('') FOR [PersonaContacto]
GO
/****** Object:  Default [DF__Proveedor__Direc__670A40DB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Proveedor] ADD  DEFAULT ('') FOR [Direccion]
GO
/****** Object:  Default [DF__Proveedor__Telef__67FE6514]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Proveedor] ADD  DEFAULT ('') FOR [Telefono]
GO
/****** Object:  Default [DF__Proveedor__Fax__68F2894D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Proveedor] ADD  DEFAULT ('') FOR [Fax]
GO
/****** Object:  Default [DF__Proveedor__Celul__69E6AD86]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Proveedor] ADD  DEFAULT ('') FOR [Celular]
GO
/****** Object:  Default [DF__Proveedor__Email__6ADAD1BF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Proveedor] ADD  DEFAULT ('') FOR [Email]
GO
/****** Object:  Default [DF__Proveedor__NIT__6BCEF5F8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Proveedor] ADD  DEFAULT ('') FOR [NIT]
GO
/****** Object:  Default [DF__Proveedor__Cuent__6CC31A31]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Proveedor] ADD  DEFAULT ('') FOR [CuentaPorPagar]
GO
/****** Object:  Default [DF__Proveedor__Cuent__6DB73E6A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Proveedor] ADD  DEFAULT ('') FOR [CuentaAuxiliar]
GO
/****** Object:  Default [DF__Proveedor__Obser__6EAB62A3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Proveedor] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__Proveedor__Palmi__1995C0A8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Proveedor] ADD  DEFAULT ('') FOR [PalmitoGeografica]
GO
/****** Object:  Default [DF__Puesto__Codigo__42E1EEFE]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Puesto__Nombre__43D61337]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Puesto__NumeroIt__44CA3770]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [NumeroItem]
GO
/****** Object:  Default [DF__Puesto__Organiza__45BE5BA9]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [Organizacion]
GO
/****** Object:  Default [DF__Puesto__Cargo__46B27FE2]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [Cargo]
GO
/****** Object:  Default [DF__Puesto__Inmediat__47A6A41B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [InmediatoSuperior]
GO
/****** Object:  Default [DF__Puesto__Factor__489AC854]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ((1)) FOR [Factor]
GO
/****** Object:  Default [DF__Puesto__RazonPue__498EEC8D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [RazonPuesto]
GO
/****** Object:  Default [DF__Puesto__Cualidad__4A8310C6]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CualidadesPersonales]
GO
/****** Object:  Default [DF__Puesto__OtrosReq__4B7734FF]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [OtrosRequisitos]
GO
/****** Object:  Default [DF__Puesto__Cumplimi__4C6B5938]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CumplimientoNormas]
GO
/****** Object:  Default [DF__Puesto__CuentaGa__4D5F7D71]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaGastoIngreso01]
GO
/****** Object:  Default [DF__Puesto__CuentaGa__4E53A1AA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaGastoIngreso02]
GO
/****** Object:  Default [DF__Puesto__CuentaGa__4F47C5E3]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaGastoIngreso03]
GO
/****** Object:  Default [DF__Puesto__CuentaGa__503BEA1C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaGastoIngreso04]
GO
/****** Object:  Default [DF__Puesto__CuentaGa__51300E55]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaGastoIngreso05]
GO
/****** Object:  Default [DF__Puesto__CuentaGa__5224328E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaGastoIngreso06]
GO
/****** Object:  Default [DF__Puesto__CuentaGa__531856C7]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaGastoIngreso07]
GO
/****** Object:  Default [DF__Puesto__CuentaGa__540C7B00]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaGastoIngreso08]
GO
/****** Object:  Default [DF__Puesto__CuentaGa__55009F39]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaGastoIngreso09]
GO
/****** Object:  Default [DF__Puesto__CuentaGa__55F4C372]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaGastoIngreso10]
GO
/****** Object:  Default [DF__Puesto__CuentaGa__56E8E7AB]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaGastoAporte06]
GO
/****** Object:  Default [DF__Puesto__CuentaGa__57DD0BE4]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaGastoAporte07]
GO
/****** Object:  Default [DF__Puesto__CuentaGa__58D1301D]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaGastoAporte08]
GO
/****** Object:  Default [DF__Puesto__CuentaGa__59C55456]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaGastoAporte09]
GO
/****** Object:  Default [DF__Puesto__CuentaGa__5AB9788F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaGastoAporte10]
GO
/****** Object:  Default [DF__Puesto__CuentaGa__5BAD9CC8]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaGastoProvision01]
GO
/****** Object:  Default [DF__Puesto__CuentaGa__5CA1C101]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaGastoProvision02]
GO
/****** Object:  Default [DF__Puesto__CuentaGa__5D95E53A]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaGastoProvision03]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__5E8A0973]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoAporte01]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__5F7E2DAC]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoAporte02]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__607251E5]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoAporte03]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__6166761E]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoAporte04]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__625A9A57]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoAporte05]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__634EBE90]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoAporte06]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__6442E2C9]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoAporte07]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__65370702]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoAporte08]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__662B2B3B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoAporte09]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__671F4F74]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoAporte10]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__681373AD]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoDescuento01]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__690797E6]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoDescuento02]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__69FBBC1F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoDescuento03]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__6AEFE058]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoDescuento04]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__6BE40491]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoDescuento05]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__6CD828CA]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoDescuento06]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__6DCC4D03]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoDescuento07]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__6EC0713C]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoDescuento08]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__6FB49575]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoDescuento09]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__70A8B9AE]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoDescuento10]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__719CDDE7]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoProvision01]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__72910220]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoProvision02]
GO
/****** Object:  Default [DF__Puesto__CuentaPa__73852659]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[Puesto] ADD  DEFAULT ('') FOR [CuentaPasivoProvision03]
GO
/****** Object:  Default [DF__PuestoExp__Puest__02C769E9]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PuestoExp] ADD  DEFAULT ('') FOR [Puesto]
GO
/****** Object:  Default [DF__PuestoExp__Numer__03BB8E22]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PuestoExp] ADD  DEFAULT ('000') FOR [Numero]
GO
/****** Object:  Default [DF__PuestoExp__Descr__04AFB25B]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PuestoExp] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__PuestoExp__Exper__05A3D694]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PuestoExp] ADD  DEFAULT ((0)) FOR [ExperienciaLaboral]
GO
/****** Object:  Default [DF__PuestoExp__Exper__0697FACD]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PuestoExp] ADD  DEFAULT ((0)) FOR [ExperienciaProfesional]
GO
/****** Object:  Default [DF__PuestoExp__Nivel__078C1F06]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PuestoExp] ADD  DEFAULT ((1)) FOR [NivelExperiencia]
GO
/****** Object:  Default [DF__PuestoExp__Prior__0880433F]    Script Date: 03/23/2015 11:26:11 ******/
ALTER TABLE [dbo].[PuestoExp] ADD  DEFAULT ((1)) FOR [Prioridad]
GO
/****** Object:  Default [DF__PuestoFor__Puest__7C1A6C5A]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[PuestoFor] ADD  DEFAULT ('') FOR [Puesto]
GO
/****** Object:  Default [DF__PuestoFor__Numer__7D0E9093]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[PuestoFor] ADD  DEFAULT ('000') FOR [Numero]
GO
/****** Object:  Default [DF__PuestoFor__Descr__7E02B4CC]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[PuestoFor] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__PuestoFor__Nivel__7EF6D905]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[PuestoFor] ADD  DEFAULT ((99)) FOR [NivelFormacion]
GO
/****** Object:  Default [DF__PuestoFor__Prior__7FEAFD3E]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[PuestoFor] ADD  DEFAULT ((1)) FOR [Prioridad]
GO
/****** Object:  Default [DF__PuestoInt__Puest__76619304]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[PuestoInt] ADD  DEFAULT ('') FOR [Puesto]
GO
/****** Object:  Default [DF__PuestoInt__Numer__7755B73D]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[PuestoInt] ADD  DEFAULT ('000') FOR [Numero]
GO
/****** Object:  Default [DF__PuestoInt__Tipo__7849DB76]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[PuestoInt] ADD  DEFAULT ((1)) FOR [Tipo]
GO
/****** Object:  Default [DF__PuestoInt__Descr__793DFFAF]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[PuestoInt] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__PuestoPer__Puest__0B5CAFEA]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[PuestoPer] ADD  DEFAULT ('') FOR [Puesto]
GO
/****** Object:  Default [DF__PuestoPer__Perfi__0C50D423]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[PuestoPer] ADD  DEFAULT ('') FOR [PerfilEvaluacion]
GO
/****** Object:  Default [DF__PuestoPer__Punta__0D44F85C]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[PuestoPer] ADD  DEFAULT ((0.00)) FOR [PuntajeMinimo]
GO
/****** Object:  Default [DF__PuestoPer__Obser__0E391C95]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[PuestoPer] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__PuestoRes__Puest__320C68B7]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[PuestoRes] ADD  DEFAULT ('') FOR [Puesto]
GO
/****** Object:  Default [DF__PuestoRes__Gesti__33008CF0]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[PuestoRes] ADD  DEFAULT ((2010)) FOR [Gestion]
GO
/****** Object:  Default [DF__PuestoRes__Numer__33F4B129]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[PuestoRes] ADD  DEFAULT ('000') FOR [Numero]
GO
/****** Object:  Default [DF__PuestoRes__Descr__34E8D562]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[PuestoRes] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__PuestoRes__Progr__35DCF99B]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[PuestoRes] ADD  DEFAULT ((0.00)) FOR [Programado]
GO
/****** Object:  Default [DF__PuestoRes__Ejecu__36D11DD4]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[PuestoRes] ADD  DEFAULT ((0.00)) FOR [Ejecutado]
GO
/****** Object:  Default [DF__Recurso__Codigo__0C06BB60]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Recurso] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Recurso__Padre__0CFADF99]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Recurso] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__Recurso__Nivel__0DEF03D2]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Recurso] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__Recurso__Ramas__0EE3280B]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Recurso] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__Recurso__Nombre__0FD74C44]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Recurso] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Recurso__CodigoE__10CB707D]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Recurso] ADD  DEFAULT ('') FOR [CodigoEDT]
GO
/****** Object:  Default [DF__Recurso__NombreA__11BF94B6]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Recurso] ADD  DEFAULT ('') FOR [NombreAlternativo]
GO
/****** Object:  Default [DF__Recurso__Descrip__12B3B8EF]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Recurso] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__Recurso__FechaMo__13A7DD28]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Recurso] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__Relaciona__Almac__5B638405]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorArticuloFinanzas] ADD  DEFAULT ('') FOR [AlmacenArticulo]
GO
/****** Object:  Default [DF__Relaciona__Artic__5C57A83E]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorArticuloFinanzas] ADD  DEFAULT ('') FOR [Articulo]
GO
/****** Object:  Default [DF__Relaciona__Cuent__5D4BCC77]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorArticuloFinanzas] ADD  DEFAULT ('') FOR [CuentaRealizable]
GO
/****** Object:  Default [DF__Relaciona__Cuent__5E3FF0B0]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorArticuloFinanzas] ADD  DEFAULT ('') FOR [CuentaAuxiliar]
GO
/****** Object:  Default [DF__Relaciona__Costo__5F3414E9]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorArticuloFinanzas] ADD  DEFAULT ('') FOR [Costo]
GO
/****** Object:  Default [DF__Relaciona__SubCo__60283922]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorArticuloFinanzas] ADD  DEFAULT ('') FOR [SubCosto]
GO
/****** Object:  Default [DF__Relaciona__Cuent__611C5D5B]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorArticuloFinanzas] ADD  DEFAULT ('') FOR [CuentaCosto]
GO
/****** Object:  Default [DF__Relaciona__Obser__62108194]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorArticuloFinanzas] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__Relaciona__Fecha__6304A5CD]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorArticuloFinanzas] ADD  DEFAULT ('06/06/2079') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__Relacionado__Poa__2EE5E349]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorGastoContabilidad] ADD  DEFAULT ('') FOR [Poa]
GO
/****** Object:  Default [DF__Relaciona__Gasto__2FDA0782]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorGastoContabilidad] ADD  DEFAULT ('') FOR [Gasto]
GO
/****** Object:  Default [DF__Relaciona__Varia__30CE2BBB]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorGastoContabilidad] ADD  DEFAULT ('') FOR [VariablePresupuesto1]
GO
/****** Object:  Default [DF__Relaciona__Varia__31C24FF4]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorGastoContabilidad] ADD  DEFAULT ('') FOR [VariablePresupuesto2]
GO
/****** Object:  Default [DF__Relaciona__Varia__32B6742D]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorGastoContabilidad] ADD  DEFAULT ('') FOR [VariablePresupuesto3]
GO
/****** Object:  Default [DF__Relaciona__Varia__33AA9866]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorGastoContabilidad] ADD  DEFAULT ('') FOR [VariablePresupuesto4]
GO
/****** Object:  Default [DF__Relaciona__Varia__349EBC9F]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorGastoContabilidad] ADD  DEFAULT ('') FOR [VariablePresupuesto5]
GO
/****** Object:  Default [DF__Relaciona__Costo__3592E0D8]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorGastoContabilidad] ADD  DEFAULT ('') FOR [Costo]
GO
/****** Object:  Default [DF__Relaciona__SubCo__36870511]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorGastoContabilidad] ADD  DEFAULT ('') FOR [SubCosto]
GO
/****** Object:  Default [DF__Relaciona__Cuent__377B294A]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorGastoContabilidad] ADD  DEFAULT ('') FOR [Cuenta]
GO
/****** Object:  Default [DF__Relaciona__Cuent__386F4D83]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorGastoContabilidad] ADD  DEFAULT ('') FOR [CuentaAuxiliar]
GO
/****** Object:  Default [DF__Relaciona__Varia__396371BC]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorGastoContabilidad] ADD  DEFAULT ('') FOR [VariableTesoreria2]
GO
/****** Object:  Default [DF__Relacionad__Tipo__3A5795F5]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorGastoContabilidad] ADD  DEFAULT ((1)) FOR [Tipo]
GO
/****** Object:  Default [DF__Relaciona__Obser__3B4BBA2E]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorGastoContabilidad] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__Relaciona__Fecha__3C3FDE67]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorGastoContabilidad] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__Relaciona__Recur__3F1C4B12]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorRecursoContabilidad] ADD  DEFAULT ('') FOR [Recurso]
GO
/****** Object:  Default [DF__Relaciona__Varia__40106F4B]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorRecursoContabilidad] ADD  DEFAULT ('') FOR [VariablePresupuesto1]
GO
/****** Object:  Default [DF__Relaciona__Varia__41049384]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorRecursoContabilidad] ADD  DEFAULT ('') FOR [VariablePresupuesto2]
GO
/****** Object:  Default [DF__Relaciona__Varia__41F8B7BD]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorRecursoContabilidad] ADD  DEFAULT ('') FOR [VariablePresupuesto3]
GO
/****** Object:  Default [DF__Relaciona__Varia__42ECDBF6]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorRecursoContabilidad] ADD  DEFAULT ('') FOR [VariablePresupuesto4]
GO
/****** Object:  Default [DF__Relaciona__Varia__43E1002F]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorRecursoContabilidad] ADD  DEFAULT ('') FOR [VariablePresupuesto5]
GO
/****** Object:  Default [DF__Relaciona__Cuent__44D52468]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorRecursoContabilidad] ADD  DEFAULT ('') FOR [Cuenta]
GO
/****** Object:  Default [DF__Relaciona__Cuent__45C948A1]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorRecursoContabilidad] ADD  DEFAULT ('') FOR [CuentaAuxiliar]
GO
/****** Object:  Default [DF__Relaciona__Varia__46BD6CDA]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorRecursoContabilidad] ADD  DEFAULT ('') FOR [VariableTesoreria1]
GO
/****** Object:  Default [DF__Relacionad__Tipo__47B19113]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorRecursoContabilidad] ADD  DEFAULT ((1)) FOR [Tipo]
GO
/****** Object:  Default [DF__Relaciona__Obser__48A5B54C]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorRecursoContabilidad] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__Relaciona__Fecha__4999D985]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[RelacionadorRecursoContabilidad] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__SubCosto__Codigo__0A888742]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[SubCosto] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__SubCosto__Padre__0B7CAB7B]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[SubCosto] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__SubCosto__Nivel__0C70CFB4]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[SubCosto] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__SubCosto__Ramas__0D64F3ED]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[SubCosto] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__SubCosto__Nombre__0E591826]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[SubCosto] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__SubCosto__Codigo__4F87BD05]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[SubCosto] ADD  DEFAULT ('') FOR [CodigoEDT]
GO
/****** Object:  Default [DF__SubCosto__Nombre__507BE13E]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[SubCosto] ADD  DEFAULT ('') FOR [NombreAlternativo]
GO
/****** Object:  Default [DF__SubCosto__Descri__51700577]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[SubCosto] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__SubCosto__FechaM__526429B0]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[SubCosto] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__TipoCon__Codigo__125EB334]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoCon] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__TipoCon__Nombre__1352D76D]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoCon] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__TipoDoc__Codigo__1FB8AE52]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDoc] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__TipoDoc__Nombre__20ACD28B]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDoc] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__TipoDocum__Codig__1C722D53]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoArticulo] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__TipoDocum__Nombr__1D66518C]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoArticulo] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__TipoDocume__Tipo__1E5A75C5]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoArticulo] ADD  DEFAULT ((1)) FOR [Tipo]
GO
/****** Object:  Default [DF__TipoDocum__Prove__1F4E99FE]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoArticulo] ADD  DEFAULT ((1)) FOR [Proveedor]
GO
/****** Object:  Default [DF__TipoDocum__Organ__2042BE37]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoArticulo] ADD  DEFAULT ((1)) FOR [Organizacion]
GO
/****** Object:  Default [DF__TipoDocum__Perso__2136E270]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoArticulo] ADD  DEFAULT ((1)) FOR [Persona]
GO
/****** Object:  Default [DF__TipoDocum__Factu__222B06A9]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoArticulo] ADD  DEFAULT ((0)) FOR [Factura]
GO
/****** Object:  Default [DF__TipoDocum__Costo__231F2AE2]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoArticulo] ADD  DEFAULT ((0)) FOR [Costo]
GO
/****** Object:  Default [DF__TipoDocum__SubCo__24134F1B]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoArticulo] ADD  DEFAULT ((0)) FOR [SubCosto]
GO
/****** Object:  Default [DF__TipoDocum__Cuent__25077354]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoArticulo] ADD  DEFAULT ((0)) FOR [CuentaCosto]
GO
/****** Object:  Default [DF__TipoDocum__Gener__25FB978D]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoArticulo] ADD  DEFAULT ((0)) FOR [GenerarDocumentoFinanciero]
GO
/****** Object:  Default [DF__TipoDocum__TipoD__26EFBBC6]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoArticulo] ADD  DEFAULT ('') FOR [TipoDocumentoFinanciero]
GO
/****** Object:  Default [DF__TipoDocum__Codig__7775B2CE]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoFinanciero] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__TipoDocum__Nombr__7869D707]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoFinanciero] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__TipoDocume__Tipo__795DFB40]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoFinanciero] ADD  DEFAULT ((1)) FOR [Tipo]
GO
/****** Object:  Default [DF__TipoDocum__Forma__6B99EBCE]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoFinanciero] ADD  DEFAULT ((1)) FOR [FormatoReporte]
GO
/****** Object:  Default [DF__TipoDocum__Titul__6C8E1007]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoFinanciero] ADD  DEFAULT ('Comprobante Integrado') FOR [TituloReporte]
GO
/****** Object:  Default [DF__TipoDocum__Presu__6D823440]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoFinanciero] ADD  DEFAULT ((0)) FOR [Presupuestado]
GO
/****** Object:  Default [DF__TipoDocum__Preve__6E765879]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoFinanciero] ADD  DEFAULT ((0)) FOR [Prevenido]
GO
/****** Object:  Default [DF__TipoDocum__Compr__6F6A7CB2]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoFinanciero] ADD  DEFAULT ((0)) FOR [Comprometido]
GO
/****** Object:  Default [DF__TipoDocum__Deven__705EA0EB]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoFinanciero] ADD  DEFAULT ((0)) FOR [Devengado]
GO
/****** Object:  Default [DF__TipoDocum__Ejecu__7152C524]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoFinanciero] ADD  DEFAULT ((-1)) FOR [Ejecutado]
GO
/****** Object:  Default [DF__TipoDocum__Fecha__7246E95D]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoDocumentoFinanciero] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__TipoGasto__Codig__60B24907]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoGasto] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__TipoGasto__Nombr__61A66D40]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoGasto] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__TipoGasto__Fecha__629A9179]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoGasto] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__TipoID__Codigo__0BC6C43E]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__TipoID__Nombre__0CBAE877]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__TipoID__Tipo__0DAF0CB0]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ((1)) FOR [Tipo]
GO
/****** Object:  Default [DF__TipoID__FormatoP__0EA330E9]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ((1)) FOR [FormatoPlanilla]
GO
/****** Object:  Default [DF__TipoID__FormatoP__0F975522]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ((1)) FOR [FormatoPapeleta]
GO
/****** Object:  Default [DF__TipoID__Redondea__108B795B]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ((-1)) FOR [RedondearMonto]
GO
/****** Object:  Default [DF__TipoID__Imponibl__117F9D94]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ((-1)) FOR [Imponible]
GO
/****** Object:  Default [DF__TipoID__Cotizabl__1273C1CD]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ((-1)) FOR [Cotizable]
GO
/****** Object:  Default [DF__TipoID__Etiqueta__1367E606]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ('Cantidad') FOR [EtiquetaCantidad]
GO
/****** Object:  Default [DF__TipoID__FormulaC__145C0A3F]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ('1.00') FOR [FormulaCantidad]
GO
/****** Object:  Default [DF__TipoID__Etiqueta__15502E78]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ('Monto') FOR [EtiquetaMonto]
GO
/****** Object:  Default [DF__TipoID__FormulaM__164452B1]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ('0.00') FOR [FormulaMonto]
GO
/****** Object:  Default [DF__TipoID__Etiqueta__173876EA]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ('Descuento') FOR [EtiquetaDescuento]
GO
/****** Object:  Default [DF__TipoID__FormulaD__182C9B23]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ('0.00') FOR [FormulaDescuento]
GO
/****** Object:  Default [DF__TipoID__CuentaEx__1920BF5C]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ('') FOR [CuentaExigible]
GO
/****** Object:  Default [DF__TipoID__Etiqueta__1A14E395]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ('') FOR [EtiquetaValor01]
GO
/****** Object:  Default [DF__TipoID__FormulaV__1B0907CE]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ('0.00') FOR [FormulaValor01]
GO
/****** Object:  Default [DF__TipoID__Etiqueta__1BFD2C07]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ('') FOR [EtiquetaValor02]
GO
/****** Object:  Default [DF__TipoID__FormulaV__1CF15040]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ('0.00') FOR [FormulaValor02]
GO
/****** Object:  Default [DF__TipoID__Etiqueta__1DE57479]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ('') FOR [EtiquetaValor03]
GO
/****** Object:  Default [DF__TipoID__FormulaV__1ED998B2]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ('0.00') FOR [FormulaValor03]
GO
/****** Object:  Default [DF__TipoID__Etiqueta__1FCDBCEB]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ('') FOR [EtiquetaValor04]
GO
/****** Object:  Default [DF__TipoID__FormulaV__20C1E124]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ('0.00') FOR [FormulaValor04]
GO
/****** Object:  Default [DF__TipoID__Etiqueta__21B6055D]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ('') FOR [EtiquetaValor05]
GO
/****** Object:  Default [DF__TipoID__FormulaV__22AA2996]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoID] ADD  DEFAULT ('0.00') FOR [FormulaValor05]
GO
/****** Object:  Default [DF__TipoPerfi__Codig__1E6F845E]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoPerfilEva] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__TipoPerfi__Nombr__1F63A897]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoPerfilEva] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__TipoPermi__Codig__22401542]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoPermiso] ADD  DEFAULT ('00') FOR [Codigo]
GO
/****** Object:  Default [DF__TipoPermi__Nombr__2334397B]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoPermiso] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__TipoPermis__Tipo__24285DB4]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoPermiso] ADD  DEFAULT ((1)) FOR [Tipo]
GO
/****** Object:  Default [DF__TipoPermi__Descr__251C81ED]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoPermiso] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__TipoPlani__Codig__3E52440B]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoPlanilla] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__TipoPlani__Nombr__3F466844]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoPlanilla] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__TipoPlanil__Tipo__403A8C7D]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoPlanilla] ADD  DEFAULT ((1)) FOR [Tipo]
GO
/****** Object:  Default [DF__TipoPlani__Gener__412EB0B6]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoPlanilla] ADD  DEFAULT ((0)) FOR [GenerarDocumentoFinanciero]
GO
/****** Object:  Default [DF__TipoPlani__TipoD__4222D4EF]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoPlanilla] ADD  DEFAULT ('') FOR [TipoDocumentoFinanciero]
GO
/****** Object:  Default [DF__TipoPrest__Codig__5CF6C6BC]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoPrestamo] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__TipoPrest__Nombr__5DEAEAF5]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoPrestamo] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__TipoViati__Codig__44EA3301]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoViatico] ADD  DEFAULT ('00') FOR [Codigo]
GO
/****** Object:  Default [DF__TipoViatic__Tipo__45DE573A]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoViatico] ADD  DEFAULT ((1)) FOR [Tipo]
GO
/****** Object:  Default [DF__TipoViati__Nombr__46D27B73]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoViatico] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__TipoViati__Moned__47C69FAC]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoViatico] ADD  DEFAULT ('1') FOR [Moneda]
GO
/****** Object:  Default [DF__TipoViati__Monto__48BAC3E5]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[TipoViatico] ADD  DEFAULT ((0.00)) FOR [Monto]
GO
/****** Object:  Default [DF__Toleranci__Horar__29221CFB]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Tolerancia] ADD  DEFAULT ('') FOR [Horario]
GO
/****** Object:  Default [DF__Toleranci__Fecha__2A164134]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Tolerancia] ADD  DEFAULT ('06/06/2079') FOR [Fecha]
GO
/****** Object:  Default [DF__Toleranci__Nombr__2B0A656D]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Tolerancia] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Toleranci__HoraE__2BFE89A6]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Tolerancia] ADD  DEFAULT ('06/06/2079') FOR [HoraEntrada]
GO
/****** Object:  Default [DF__Toleranci__Toler__2CF2ADDF]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Tolerancia] ADD  DEFAULT ((0)) FOR [ToleranciaEntrada]
GO
/****** Object:  Default [DF__Toleranci__HoraS__2DE6D218]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Tolerancia] ADD  DEFAULT ('06/06/2079') FOR [HoraSalida]
GO
/****** Object:  Default [DF__Toleranci__Toler__2EDAF651]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Tolerancia] ADD  DEFAULT ((0)) FOR [ToleranciaSalida]
GO
/****** Object:  Default [DF__Toleranci__PesoA__2FCF1A8A]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Tolerancia] ADD  DEFAULT ((0.00)) FOR [PesoAsistencia]
GO
/****** Object:  Default [DF__Toleranci__PesoA__30C33EC3]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Tolerancia] ADD  DEFAULT ((0.00)) FOR [PesoAusencia]
GO
/****** Object:  Default [DF__Toleranci__PesoE__31B762FC]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Tolerancia] ADD  DEFAULT ((0.00)) FOR [PesoExtra]
GO
/****** Object:  Default [DF__Toleranci__EsFer__32AB8735]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Tolerancia] ADD  DEFAULT ((0)) FOR [EsFeriado]
GO
/****** Object:  Default [DF__Toleranci__Descr__339FAB6E]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Tolerancia] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__Turno__Codigo__778AC167]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Turno] ADD  DEFAULT ('00') FOR [Codigo]
GO
/****** Object:  Default [DF__Turno__Nombre__787EE5A0]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Turno] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Turno__HoraEntra__797309D9]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Turno] ADD  DEFAULT ('06/06/2079') FOR [HoraEntrada]
GO
/****** Object:  Default [DF__Turno__HoraSalid__7A672E12]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Turno] ADD  DEFAULT ('06/06/2079') FOR [HoraSalida]
GO
/****** Object:  Default [DF__Turno__Descripci__7B5B524B]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Turno] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__Ubicacion__Codig__113584D1]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Ubicacion] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Ubicacion__Padre__1229A90A]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Ubicacion] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__Ubicacion__Nivel__131DCD43]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Ubicacion] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__Ubicacion__Ramas__1411F17C]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Ubicacion] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__Ubicacion__Nombr__150615B5]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Ubicacion] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__Ubicacion__Sigla__15FA39EE]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Ubicacion] ADD  DEFAULT ('') FOR [Sigla]
GO
/****** Object:  Default [DF__VacacionP__Codig__60A75C0F]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VacacionPar] ADD  DEFAULT ('000') FOR [Codigo]
GO
/****** Object:  Default [DF__VacacionP__Nombr__619B8048]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VacacionPar] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__VacacionP__Fecha__628FA481]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VacacionPar] ADD  DEFAULT ('06/06/2079') FOR [Fecha]
GO
/****** Object:  Default [DF__VacacionP__Descr__6383C8BA]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VacacionPar] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__VacacionP__Vacac__6C190EBB]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VacacionParDet] ADD  DEFAULT ('') FOR [VacacionPar]
GO
/****** Object:  Default [DF__VacacionP__Inici__6D0D32F4]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VacacionParDet] ADD  DEFAULT ((0)) FOR [Inicio]
GO
/****** Object:  Default [DF__VacacionPar__Fin__6E01572D]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VacacionParDet] ADD  DEFAULT ((0)) FOR [Fin]
GO
/****** Object:  Default [DF__VacacionPa__Dias__6EF57B66]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VacacionParDet] ADD  DEFAULT ((0.00)) FOR [Dias]
GO
/****** Object:  Default [DF__VacacionP__Acumu__6FE99F9F]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VacacionParDet] ADD  DEFAULT ((0.00)) FOR [Acumulado]
GO
/****** Object:  Default [DF__VariableP__Codig__168449D3]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto1] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__VariableP__Padre__17786E0C]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto1] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__VariableP__Nivel__186C9245]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto1] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__VariableP__Ramas__1960B67E]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto1] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__VariableP__Nombr__1A54DAB7]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto1] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__VariableP__Codig__1B48FEF0]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto1] ADD  DEFAULT ('') FOR [CodigoEDT]
GO
/****** Object:  Default [DF__VariableP__Nombr__1C3D2329]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto1] ADD  DEFAULT ('') FOR [NombreAlternativo]
GO
/****** Object:  Default [DF__VariableP__Descr__1D314762]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto1] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__VariableP__Fecha__1E256B9B]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto1] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__VariableP__Codig__2101D846]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto2] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__VariableP__Padre__21F5FC7F]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto2] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__VariableP__Nivel__22EA20B8]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto2] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__VariableP__Ramas__23DE44F1]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto2] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__VariableP__Nombr__24D2692A]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto2] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__VariableP__Codig__25C68D63]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto2] ADD  DEFAULT ('') FOR [CodigoEDT]
GO
/****** Object:  Default [DF__VariableP__Nombr__26BAB19C]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto2] ADD  DEFAULT ('') FOR [NombreAlternativo]
GO
/****** Object:  Default [DF__VariableP__Descr__27AED5D5]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto2] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__VariableP__Fecha__28A2FA0E]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto2] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__VariableP__Codig__2B7F66B9]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto3] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__VariableP__Padre__2C738AF2]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto3] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__VariableP__Nivel__2D67AF2B]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto3] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__VariableP__Ramas__2E5BD364]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto3] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__VariableP__Nombr__2F4FF79D]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto3] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__VariableP__Codig__30441BD6]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto3] ADD  DEFAULT ('') FOR [CodigoEDT]
GO
/****** Object:  Default [DF__VariableP__Nombr__3138400F]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto3] ADD  DEFAULT ('') FOR [NombreAlternativo]
GO
/****** Object:  Default [DF__VariableP__Descr__322C6448]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto3] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__VariableP__Fecha__33208881]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto3] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__VariableP__Codig__35FCF52C]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto4] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__VariableP__Padre__36F11965]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto4] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__VariableP__Nivel__37E53D9E]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto4] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__VariableP__Ramas__38D961D7]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto4] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__VariableP__Nombr__39CD8610]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto4] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__VariableP__Codig__3AC1AA49]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto4] ADD  DEFAULT ('') FOR [CodigoEDT]
GO
/****** Object:  Default [DF__VariableP__Nombr__3BB5CE82]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto4] ADD  DEFAULT ('') FOR [NombreAlternativo]
GO
/****** Object:  Default [DF__VariableP__Descr__3CA9F2BB]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto4] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__VariableP__Fecha__3D9E16F4]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto4] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__VariableP__Codig__407A839F]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto5] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__VariableP__Padre__416EA7D8]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto5] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__VariableP__Nivel__4262CC11]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto5] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__VariableP__Ramas__4356F04A]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto5] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__VariableP__Nombr__444B1483]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto5] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__VariableP__Codig__453F38BC]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto5] ADD  DEFAULT ('') FOR [CodigoEDT]
GO
/****** Object:  Default [DF__VariableP__Nombr__46335CF5]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto5] ADD  DEFAULT ('') FOR [NombreAlternativo]
GO
/****** Object:  Default [DF__VariableP__Descr__4727812E]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto5] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__VariableP__Fecha__481BA567]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariablePresupuesto5] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__VariableT__Codig__0F6D37F0]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria1] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__VariableT__Padre__10615C29]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria1] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__VariableT__Nivel__11558062]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria1] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__VariableT__Ramas__1249A49B]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria1] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__VariableT__Nombr__133DC8D4]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria1] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__VariableT__Codig__1431ED0D]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria1] ADD  DEFAULT ('') FOR [CodigoEDT]
GO
/****** Object:  Default [DF__VariableT__Nombr__15261146]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria1] ADD  DEFAULT ('') FOR [NombreAlternativo]
GO
/****** Object:  Default [DF__VariableT__Descr__161A357F]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria1] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__VariableT__Fecha__170E59B8]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria1] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__VariableT__Codig__19EAC663]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria2] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__VariableT__Padre__1ADEEA9C]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria2] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__VariableT__Nivel__1BD30ED5]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria2] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__VariableT__Ramas__1CC7330E]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria2] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__VariableT__Nombr__1DBB5747]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria2] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__VariableT__Codig__1EAF7B80]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria2] ADD  DEFAULT ('') FOR [CodigoEDT]
GO
/****** Object:  Default [DF__VariableT__Nombr__1FA39FB9]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria2] ADD  DEFAULT ('') FOR [NombreAlternativo]
GO
/****** Object:  Default [DF__VariableT__Descr__2097C3F2]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria2] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__VariableT__Fecha__218BE82B]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria2] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__VariableT__Codig__246854D6]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria3] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__VariableT__Padre__255C790F]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria3] ADD  DEFAULT ('') FOR [Padre]
GO
/****** Object:  Default [DF__VariableT__Nivel__26509D48]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria3] ADD  DEFAULT ((1)) FOR [Nivel]
GO
/****** Object:  Default [DF__VariableT__Ramas__2744C181]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria3] ADD  DEFAULT ((0)) FOR [Ramas]
GO
/****** Object:  Default [DF__VariableT__Nombr__2838E5BA]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria3] ADD  DEFAULT ('') FOR [Nombre]
GO
/****** Object:  Default [DF__VariableT__Codig__292D09F3]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria3] ADD  DEFAULT ('') FOR [CodigoEDT]
GO
/****** Object:  Default [DF__VariableT__Nombr__2A212E2C]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria3] ADD  DEFAULT ('') FOR [NombreAlternativo]
GO
/****** Object:  Default [DF__VariableT__Descr__2B155265]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria3] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__VariableT__Fecha__2C09769E]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[VariableTesoreria3] ADD  DEFAULT ('01/01/1900') FOR [FechaModificacion]
GO
/****** Object:  Default [DF__Viatico__Codigo__2E06CDA9]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Viatico] ADD  DEFAULT ('') FOR [Codigo]
GO
/****** Object:  Default [DF__Viatico__Referen__2EFAF1E2]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Viatico] ADD  DEFAULT ('') FOR [Referencia]
GO
/****** Object:  Default [DF__Viatico__Persona__2FEF161B]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Viatico] ADD  DEFAULT ('') FOR [Persona]
GO
/****** Object:  Default [DF__Viatico__Fecha__30E33A54]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Viatico] ADD  DEFAULT ('06/06/2079') FOR [Fecha]
GO
/****** Object:  Default [DF__Viatico__Memo__31D75E8D]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Viatico] ADD  DEFAULT ('') FOR [Memo]
GO
/****** Object:  Default [DF__Viatico__FechaSa__32CB82C6]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Viatico] ADD  DEFAULT ('06/06/2079') FOR [FechaSalida]
GO
/****** Object:  Default [DF__Viatico__Resoluc__33BFA6FF]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Viatico] ADD  DEFAULT ('') FOR [Resolucion]
GO
/****** Object:  Default [DF__Viatico__FechaRe__34B3CB38]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Viatico] ADD  DEFAULT ('06/06/2079') FOR [FechaRetorno]
GO
/****** Object:  Default [DF__Viatico__Banco__35A7EF71]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Viatico] ADD  DEFAULT ('Banco Ganadero') FOR [Banco]
GO
/****** Object:  Default [DF__Viatico__NumeroC__369C13AA]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Viatico] ADD  DEFAULT ('') FOR [NumeroCuenta]
GO
/****** Object:  Default [DF__Viatico__NumeroC__379037E3]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Viatico] ADD  DEFAULT ('') FOR [NumeroCheque]
GO
/****** Object:  Default [DF__Viatico__Observa__38845C1C]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[Viatico] ADD  DEFAULT ('') FOR [Observaciones]
GO
/****** Object:  Default [DF__ViaticoDe__Viati__3B60C8C7]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[ViaticoDetalle] ADD  DEFAULT ('') FOR [Viatico]
GO
/****** Object:  Default [DF__ViaticoDe__Numer__3C54ED00]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[ViaticoDetalle] ADD  DEFAULT ('00') FOR [Numero]
GO
/****** Object:  Default [DF__ViaticoDe__TipoV__3D491139]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[ViaticoDetalle] ADD  DEFAULT ('') FOR [TipoViatico]
GO
/****** Object:  Default [DF__ViaticoDe__Descr__3E3D3572]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[ViaticoDetalle] ADD  DEFAULT ('') FOR [Descripcion]
GO
/****** Object:  Default [DF__ViaticoDe__Canti__3F3159AB]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[ViaticoDetalle] ADD  DEFAULT ((1)) FOR [Cantidad]
GO
/****** Object:  Default [DF__ViaticoDe__Moned__40257DE4]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[ViaticoDetalle] ADD  DEFAULT ('1') FOR [Moneda]
GO
/****** Object:  Default [DF__ViaticoDe__Monto__4119A21D]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[ViaticoDetalle] ADD  DEFAULT ((0.00)) FOR [Monto]
GO
/****** Object:  Default [DF__ViaticoDe__Reten__420DC656]    Script Date: 03/23/2015 11:26:12 ******/
ALTER TABLE [dbo].[ViaticoDetalle] ADD  DEFAULT ((0.00)) FOR [Retencion]
GO
