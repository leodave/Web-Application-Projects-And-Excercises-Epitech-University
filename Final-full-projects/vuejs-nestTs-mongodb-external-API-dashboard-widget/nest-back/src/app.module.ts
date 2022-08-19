import { Module } from '@nestjs/common';
import { AppController } from './drink.controller';
import { DrinkService } from './drink.service';
import { WeatherModule } from './weather/weather.module';
import { ExchangeModule } from './exchange/exchange.module';
import { RedditModule } from './reddit/reddit.module';
import { UsersModule } from './users/users.module';
import { MongooseModule } from '@nestjs/mongoose';

@Module({
  imports: [
    MongooseModule.forRoot(
      'mongodb+srv://dawitelias:0912115246@cluster0.ln717.mongodb.net/dashboard?retryWrites=true&w=majority',
    ),
    WeatherModule,
    ExchangeModule,
    RedditModule,
    UsersModule,
  ],
  controllers: [AppController],
  providers: [DrinkService],
})
export class AppModule {}
