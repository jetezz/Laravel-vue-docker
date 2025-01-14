# -----------------------
# Etapa 1: Build de la app
# -----------------------
  FROM node:18-alpine AS build

  # Crea el directorio de trabajo
  WORKDIR /app
  
  # Copia los archivos necesarios para la instalación
  COPY package.json pnpm-lock.yaml ./
  
  # Instala pnpm de forma global
  RUN npm install -g pnpm
  
  # Instala las dependencias del proyecto
  RUN pnpm install
  
  # Copia el resto de archivos del proyecto
  COPY . .
  
  # Construye la aplicación para producción
  RUN pnpm run build
  
  
  # -----------------------
  # Etapa 2: Servir en producción
  # -----------------------
  FROM nginx:alpine
  
  # Copiamos la carpeta dist generada en la etapa anterior al directorio de Nginx
  COPY --from=build /app/dist /usr/share/nginx/html
  
  # Exponemos el puerto 80
  EXPOSE 80
  
  # Iniciamos Nginx
  CMD ["nginx", "-g", "daemon off;"]
  