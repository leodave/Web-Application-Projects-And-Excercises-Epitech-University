import { Controller, Get, Param } from '@nestjs/common';
import { RedditService } from './reddit.service';

@Controller('reddit')
export class RedditController {
  constructor(private readonly redditService: RedditService) {}

  @Get(':key')
  convert(@Param('key') key: string) {
    return this.redditService.reddit(key);
  }
}
