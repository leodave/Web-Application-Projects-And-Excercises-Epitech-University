import { Module } from '@nestjs/common';
import { MoviesModule } from './movies/movies.module';
import { UsersModule } from './users/users.module';
import { MongooseModule } from '@nestjs/mongoose';

@Module({
  imports: [
    MongooseModule.forRoot(
      'mongodb+srv://dawitelias:0912115246@cluster0.ln717.mongodb.net/David?retryWrites=true&w=majority',
    ),
    MoviesModule,
    UsersModule,
  ],
})
export class AppModule {}
