USE [ssurrhh]
GO
/****** Object:  Table [dbo].[file_employees]    Script Date: 12/16/2014 09:57:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[file_employees](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [varchar](50) NULL,
	[paternal_surname] [varchar](50) NULL,
	[maternal_surname] [varchar](50) NULL,
	[born_date] [date] NOT NULL,
	[born_country] [nvarchar](50) NULL,
	[born_city] [varchar](50) NULL,
	[ci] [varchar](20) NULL,
	[gender] [nchar](1) NULL,
	[address] [varchar](50) NULL,
	[phone] [bigint] NULL,
	[email] [nvarchar](max) NULL,
	[registred_datetime] [datetime] NULL,
 CONSTRAINT [PK_files_employees] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[categories]    Script Date: 12/16/2014 09:57:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[categories](
	[id] [numeric](20, 0) IDENTITY(1,1) NOT NULL,
	[category_name] [varchar](255) NULL,
	[category_description] [varchar](255) NULL,
	[created] [datetime] NULL,
	[modified] [datetime] NULL,
 CONSTRAINT [PK_CATEGORIES] PRIMARY KEY NONCLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[users]    Script Date: 12/16/2014 09:57:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[users](
	[id] [numeric](18, 0) IDENTITY(1,1) NOT NULL,
	[user_email] [varchar](255) NULL,
	[user_password] [varchar](100) NULL,
	[user_name] [varchar](255) NULL,
	[user_code] [varchar](255) NULL,
	[user_status] [bit] NULL,
	[created] [datetime] NULL,
	[modified] [datetime] NULL,
 CONSTRAINT [PK_USERS] PRIMARY KEY NONCLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[settings]    Script Date: 12/16/2014 09:57:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[settings](
	[setting_key] [varchar](255) NOT NULL,
	[setting_value] [varchar](1000) NULL,
	[created] [datetime] NULL,
	[modified] [datetime] NULL,
 CONSTRAINT [PK_SETTINGS] PRIMARY KEY NONCLUSTERED 
(
	[setting_key] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[groups]    Script Date: 12/16/2014 09:57:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[groups](
	[id] [numeric](18, 0) IDENTITY(1,1) NOT NULL,
	[name] [varchar](100) NULL,
	[created] [datetime] NULL,
	[modified] [datetime] NULL,
 CONSTRAINT [PK_GROUPS] PRIMARY KEY NONCLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[aros_acos]    Script Date: 12/16/2014 09:57:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[aros_acos](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[aro_id] [int] NOT NULL,
	[aco_id] [int] NOT NULL,
	[_create] [nvarchar](2) NOT NULL,
	[_read] [nvarchar](2) NOT NULL,
	[_update] [nvarchar](2) NOT NULL,
	[_delete] [nvarchar](2) NOT NULL,
 CONSTRAINT [ARO_ACO_KEY] UNIQUE NONCLUSTERED 
(
	[aro_id] ASC,
	[aco_id] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[aros]    Script Date: 12/16/2014 09:57:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[aros](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[parent_id] [int] NULL,
	[model] [nvarchar](255) NULL,
	[foreign_key] [int] NULL,
	[alias] [nvarchar](255) NULL,
	[lft] [int] NULL,
	[rght] [int] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[acos]    Script Date: 12/16/2014 09:57:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[acos](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[parent_id] [int] NULL,
	[model] [nvarchar](255) NULL,
	[foreign_key] [int] NULL,
	[alias] [nvarchar](255) NULL,
	[lft] [int] NULL,
	[rght] [int] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[users_groups]    Script Date: 12/16/2014 09:57:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[users_groups](
	[user_id] [numeric](18, 0) NOT NULL,
	[group_id] [numeric](18, 0) NOT NULL,
 CONSTRAINT [PK_USERS_GROUPS] PRIMARY KEY CLUSTERED 
(
	[user_id] ASC,
	[group_id] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[file_vacations]    Script Date: 12/16/2014 09:57:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[file_vacations](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[employee_id] [int] NOT NULL,
	[name] [varchar](50) NOT NULL,
	[description] [text] NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[file_statements]    Script Date: 12/16/2014 09:57:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[file_statements](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[employee_id] [int] NOT NULL,
	[name] [varchar](50) NOT NULL,
	[description] [text] NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[file_records]    Script Date: 12/16/2014 09:57:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[file_records](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[employee_id] [int] NOT NULL,
	[name] [varchar](50) NOT NULL,
	[description] [text] NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[file_personal_educations]    Script Date: 12/16/2014 09:57:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[file_personal_educations](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[employee_id] [int] NOT NULL,
	[titulation_grade] [varchar](100) NOT NULL,
	[date] [date] NULL,
	[location] [varchar](100) NOT NULL,
	[institution] [text] NULL,
	[description] [text] NOT NULL,
	[registred_datetime] [datetime] NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[file_memos]    Script Date: 12/16/2014 09:57:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[file_memos](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[employee_id] [int] NOT NULL,
	[type] [varchar](50) NOT NULL,
	[expedition_date] [date] NULL,
	[description] [text] NOT NULL,
	[content] [text] NULL,
	[registred_datetime] [datetime] NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[file_jobs]    Script Date: 12/16/2014 09:57:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[file_jobs](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[employee_id] [int] NOT NULL,
	[name] [varchar](50) NOT NULL,
	[description] [text] NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[articles]    Script Date: 12/16/2014 09:57:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[articles](
	[id] [numeric](18, 0) IDENTITY(1,1) NOT NULL,
	[category_id] [numeric](20, 0) NOT NULL,
	[article_title] [varchar](255) NULL,
	[article_date] [datetime] NULL,
	[article_summary] [text] NULL,
	[article_content] [text] NULL,
	[created] [datetime] NULL,
	[modified] [datetime] NULL,
 CONSTRAINT [PK_ARTICLES] PRIMARY KEY NONCLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Default [DF__aros_acos___crea__0EA330E9]    Script Date: 12/16/2014 09:57:09 ******/
ALTER TABLE [dbo].[aros_acos] ADD  DEFAULT ('0') FOR [_create]
GO
/****** Object:  Default [DF__aros_acos___read__0F975522]    Script Date: 12/16/2014 09:57:09 ******/
ALTER TABLE [dbo].[aros_acos] ADD  DEFAULT ('0') FOR [_read]
GO
/****** Object:  Default [DF__aros_acos___upda__108B795B]    Script Date: 12/16/2014 09:57:09 ******/
ALTER TABLE [dbo].[aros_acos] ADD  DEFAULT ('0') FOR [_update]
GO
/****** Object:  Default [DF__aros_acos___dele__117F9D94]    Script Date: 12/16/2014 09:57:09 ******/
ALTER TABLE [dbo].[aros_acos] ADD  DEFAULT ('0') FOR [_delete]
GO
/****** Object:  Default [DF_file_employees_registred_datetime]    Script Date: 12/16/2014 09:57:09 ******/
ALTER TABLE [dbo].[file_employees] ADD  CONSTRAINT [DF_file_employees_registred_datetime]  DEFAULT (getdate()) FOR [registred_datetime]
GO
/****** Object:  Default [DF_file_memos_registred_datetime]    Script Date: 12/16/2014 09:57:09 ******/
ALTER TABLE [dbo].[file_memos] ADD  CONSTRAINT [DF_file_memos_registred_datetime]  DEFAULT (getdate()) FOR [registred_datetime]
GO
/****** Object:  Default [DF_file_personaleducation_registred_datetime]    Script Date: 12/16/2014 09:57:09 ******/
ALTER TABLE [dbo].[file_personal_educations] ADD  CONSTRAINT [DF_file_personaleducation_registred_datetime]  DEFAULT (getdate()) FOR [registred_datetime]
GO
/****** Object:  ForeignKey [FK_ARTICLES__4_CATEGORI]    Script Date: 12/16/2014 09:57:09 ******/
ALTER TABLE [dbo].[articles]  WITH CHECK ADD  CONSTRAINT [FK_ARTICLES__4_CATEGORI] FOREIGN KEY([category_id])
REFERENCES [dbo].[categories] ([id])
GO
ALTER TABLE [dbo].[articles] CHECK CONSTRAINT [FK_ARTICLES__4_CATEGORI]
GO
/****** Object:  ForeignKey [FK_file_jobs_file_employees]    Script Date: 12/16/2014 09:57:09 ******/
ALTER TABLE [dbo].[file_jobs]  WITH CHECK ADD  CONSTRAINT [FK_file_jobs_file_employees] FOREIGN KEY([employee_id])
REFERENCES [dbo].[file_employees] ([id])
GO
ALTER TABLE [dbo].[file_jobs] CHECK CONSTRAINT [FK_file_jobs_file_employees]
GO
/****** Object:  ForeignKey [FK_file_memos_file_employees]    Script Date: 12/16/2014 09:57:09 ******/
ALTER TABLE [dbo].[file_memos]  WITH CHECK ADD  CONSTRAINT [FK_file_memos_file_employees] FOREIGN KEY([employee_id])
REFERENCES [dbo].[file_employees] ([id])
GO
ALTER TABLE [dbo].[file_memos] CHECK CONSTRAINT [FK_file_memos_file_employees]
GO
/****** Object:  ForeignKey [FK_file_personaleducation_file_employees]    Script Date: 12/16/2014 09:57:09 ******/
ALTER TABLE [dbo].[file_personal_educations]  WITH CHECK ADD  CONSTRAINT [FK_file_personaleducation_file_employees] FOREIGN KEY([employee_id])
REFERENCES [dbo].[file_employees] ([id])
GO
ALTER TABLE [dbo].[file_personal_educations] CHECK CONSTRAINT [FK_file_personaleducation_file_employees]
GO
/****** Object:  ForeignKey [FK_file_records_file_employees]    Script Date: 12/16/2014 09:57:09 ******/
ALTER TABLE [dbo].[file_records]  WITH CHECK ADD  CONSTRAINT [FK_file_records_file_employees] FOREIGN KEY([employee_id])
REFERENCES [dbo].[file_employees] ([id])
GO
ALTER TABLE [dbo].[file_records] CHECK CONSTRAINT [FK_file_records_file_employees]
GO
/****** Object:  ForeignKey [FK_file_statements_file_employees]    Script Date: 12/16/2014 09:57:09 ******/
ALTER TABLE [dbo].[file_statements]  WITH CHECK ADD  CONSTRAINT [FK_file_statements_file_employees] FOREIGN KEY([employee_id])
REFERENCES [dbo].[file_employees] ([id])
GO
ALTER TABLE [dbo].[file_statements] CHECK CONSTRAINT [FK_file_statements_file_employees]
GO
/****** Object:  ForeignKey [FK_file_vacations_file_employees]    Script Date: 12/16/2014 09:57:09 ******/
ALTER TABLE [dbo].[file_vacations]  WITH CHECK ADD  CONSTRAINT [FK_file_vacations_file_employees] FOREIGN KEY([employee_id])
REFERENCES [dbo].[file_employees] ([id])
GO
ALTER TABLE [dbo].[file_vacations] CHECK CONSTRAINT [FK_file_vacations_file_employees]
GO
/****** Object:  ForeignKey [FK_USERS_GR_USERS_GRO_GROUPS]    Script Date: 12/16/2014 09:57:09 ******/
ALTER TABLE [dbo].[users_groups]  WITH CHECK ADD  CONSTRAINT [FK_USERS_GR_USERS_GRO_GROUPS] FOREIGN KEY([group_id])
REFERENCES [dbo].[groups] ([id])
GO
ALTER TABLE [dbo].[users_groups] CHECK CONSTRAINT [FK_USERS_GR_USERS_GRO_GROUPS]
GO
/****** Object:  ForeignKey [FK_USERS_GR_USERS_GRO_USERS]    Script Date: 12/16/2014 09:57:09 ******/
ALTER TABLE [dbo].[users_groups]  WITH CHECK ADD  CONSTRAINT [FK_USERS_GR_USERS_GRO_USERS] FOREIGN KEY([user_id])
REFERENCES [dbo].[users] ([id])
GO
ALTER TABLE [dbo].[users_groups] CHECK CONSTRAINT [FK_USERS_GR_USERS_GRO_USERS]
GO
